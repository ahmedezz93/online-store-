<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Image;
use App\Traits\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    use UploadImages;
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        return view('albums.create');
    }


    public function store(AlbumRequest $request)
    {
        $request->validated();
        Album::create([
            'name' => $request->name
        ]);
        flash()->addsuccess(trans('messages.save_message'));
        return back();
    }


    public function edit($id)
    {
        $album = Album::findOrFail($id);
        return view('albums.edit', compact('album'));
    }








    public function update(AlbumRequest $request, $id)
    {
        $request->validated();
        $album = Album::find($id);
        $album->update([
            'name' => $request->name
        ]);

        flash()->addsuccess(trans('messages.save_message'));
        return back();
    }


    public function destroy($id)       //delete album that doesnt have any images
    {
        $album = Album::findOrFail($id);
        $album->delete();

        Storage::disk('upload_images')->deleteDirectory('/' . $album->name);

        flash()->addError(trans('messages.delete_message'));
        return back();
    }

    public function createImages($id)
    {
        $album=Album::findOrFail($id);
        return view('albums.create_images',compact('album'));
    }

    public function uploadImages(Request $request,$id){         //upload images on server
         $album=Album::findOrFail($id);
        $file = $request->file('dzfile');

        $image_name = $file->getclientoriginalname();
        $file_name=$file->storeAs($album->name, $image_name, 'upload_images');
        return response()->json([
            'name' => $file_name,
            'original_name'=>$file->getClientOriginalName(),    //append filename to use it for save images in db
        ]);

    }
     public function storeImages(Request $request,$id)        //store images in db using polymorph
    {
            $album=album::findOrFail($id);

            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Image::create([
                        'name' => $image,
                        'imageable_id' => $album->id,
                        'imageable_type' => Album::class
                    ]);

                }
            }

            flash()->addsuccess(trans('messages.save_message'));
            return back();


            //

    }
    public function destroyOrMove(Request $request, $id)
    {

        if ($request->submit == 'delete') {
            $album = Album::findOrFail($id);
            $album->images()->delete();
            Storage::disk('upload_images')->deleteDirectory('/' . $album->name);
            $album->delete();
            flash()->addError(trans('messages.delete_message'));
            return back();
        }

        if ($request->submit == 'move') {
            return redirect()->route('albums.move_to_folder', ['id' => $id]);
        }
    }



    public function moveToFolder(Request $request, $id)
    {

        $newFolder = $request->name; // Change this to the name of the new folder
        $album = Album::findOrFail($id);
        $images = $album->images;

        // Create the new folder if it doesn't exist
        if (!Storage::disk('upload_images')->exists($newFolder)) {

            $newAlbum = Album::create([
                'name' => $request->name
            ]);
            Storage::disk('upload_images')->makeDirectory($newAlbum->name);
        }

        foreach ($images as $image) {
            $newPath = $newFolder . '/' . $image->name;
            Storage::disk('upload_images')->move($image->name, $newPath);
            $image->update(['imageable_id' =>  $newAlbum->id]);
        }

        flash()->addSuccess(trans('messages.move_message'));
        return back();
    }
}
