<?php
namespace App\Repository;

use App\Http\Traits\All_FuncTrait;
use App\Interface\categoryrepositoryinterface;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class categoryrepository implements categoryrepositoryinterface
{
    use All_FuncTrait;

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create_category');
    }




    public function store($request)
    {
        DB::beginTransaction();
        try {
            if (!$request->has('is_active')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }

            $category = Category::create([
                'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'status' => $request->status,
            ]);

            if ($request->hasfile('photo')) {
                $photo_name = $request->photo->getclientoriginalname();
                $dir_name = $this->uploadimages($request->photo, 'categories', $photo_name, 'upload_files');

                Image::create([
                    'image_name' => $photo_name,
                    'imageable_id' => $category->id,
                    'imageable_type' => Category::class,
                ]);
            }

            DB::commit();
            flash()->addsuccess(trans('messages.save_message'));
            return back();
        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function edit($id)
    {
        $category = Category::find($id);
        if (!$category) {
            flash()->adderror(trans('messages.data not found'));
            return back();
        } else {
            return view('admin.categories.edit_category', compact('category'));
        }
    }

    public function update($request)
    {

        DB::beginTransaction();
        try{

            if (!$request->has('is_active')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }

            $category = Category::find($request->id);
            $category->update([
                'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'status' => $request->status,
            ]);


            if($request->hasfile('photo')){


                $new_photo=$request->photo->getclientoriginalname();
                 $old_image=$request->old_image;


             //   if photo not equal photo in DB -->delete old photo and create new image
             if($new_photo != $old_image ){

                   if(!empty($old_image)){
                    $this->delete_image('upload_files', 'categories',$old_image);

                   }
                $this->uploadimages($request->photo,'categories',$new_photo,'upload_files');
           // update photo in DB
                Image::where('image_name',$old_image)->where('imageable_id',$request->id)->update([
                 "image_name"=> $new_photo,
                ]);
             }
            }

            DB::commit();
            flash()->addsuccess(trans('messages.update_message'));
            return back();


        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }







    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $category = Category::find($id);
            $images = $category->image;

               //if image exists
            if ($images != null) {
                $image_name = $category->image->image_name;

                //remove image from server
                $this->delete_image('upload_files', 'categories', $image_name);

             //remove image from DB
                Image::where('imageable_id', $id)
                    ->where('image_name', $image_name)
                    ->delete();
            }


            //remove this category
            Category::where('id', $id)->delete();
            DB::commit();

            flash()->adderror(trans('messages.delete_message'));
            return back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }
}
