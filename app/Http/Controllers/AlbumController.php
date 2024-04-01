<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use App\Models\Image;
use App\Traits\UploadImages;
use Illuminate\Http\Request;
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
        // Session::forget('images');
        return view('albums.create');
    }


    public function uploadImages(Request $request)
    {
        $images = $request->file('dzfile');
        // $this->uploadImagesOnServer('albums', $images);

        $request->session()->push('images', $images);

        return response()->json(['message' => 'Images uploaded successfully']);
    }

    public function edit($id)
    {
          $album=Album::findOrFail($id);
        return view('albums.edit',compact('album'));
    }



    public function store(AlbumRequest $request)
    {

        $request->validated();
        $album = Album::create([
            'name' => $request->name
        ]);

        $images = $request->session()->get('images', []);
        foreach ($images as $image) {
            Image::create([
                'name' => $image,
                'imageable_id' => $album->id,
                'imageable_type' => Album::class
            ]);
        }

        // Clear the session after inserting images
        $request->session()->forget('images');

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


    public function update(AlbumRequest $request,$id){
        $request->validated();
       $album= Album::find($id);
       $album->update([
        'name'=>$request->name
       ]);

       flash()->addsuccess(trans('messages.save_message'));
       return back();

    }
    public function destroyOrMove(Request $request, $id)       //delete album that doesnt have any images
    {

        if ($request->submit == 'delete') {
            $album = Album::findOrFail($id);
            $album->images()->delete();
            // $this->deleteImagesOnServer($album->name,$album->image->name);
            Storage::disk('upload_images')->deleteDirectory('/' . $album->name);
            $album->delete();
            flash()->addError(trans('messages.delete_message'));
            return back();
        }

        if ($request->submit == 'move') {
            return view('albums.move_to_folder', compact('id'));
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
