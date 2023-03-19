<?php
namespace App\Repository;

use App\Http\Traits\All_FuncTrait;
use App\Interface\brandrepositoryinterface;
use App\Models\Brand;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class brandrepository implements brandrepositoryinterface
{

    use All_FuncTrait;

    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.brands', compact('brands'));
    }






    public function create()
    {
        return view('admin.brands.create_brands');
    }




    public function store($request)
    {
        DB::beginTransaction();

        try{
            if (!$request->has('is_active')) {
                $request->request->add(['status' => 0]);
            } else {
                $request->request->add(['status' => 1]);
            }


            $brand=Brand::create([
                'name' => ['ar' => $request->name_ar,'en' => $request->name_en],
                'status' => $request->status,
            ]);

            if ($request->hasfile('photo')) {

                $photo_name = $request->photo->getclientoriginalname();
                $dir_name = $this->uploadimages($request->photo, 'brands', $photo_name, 'upload_files');

                Image::create([
                    'image_name' => $photo_name,
                    'imageable_id' => $brand->id,
                    'imageable_type' => Brand::class,
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
        $brand = Brand::find($id);
        return view('admin.brands.edit_brands', compact('brand'));
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

            $brand = Brand::find($request->id);
            $brand->update([
                'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
                'status' => $request->status,
                ]);


            if($request->hasfile('photo')){

                $new_photo=$request->photo->getclientoriginalname();
                  $old_image=$request->old_image;

                if($new_photo!=$old_image){
                $this->delete_image('upload_files', 'brands',$old_image);
                $this->uploadimages($request->photo,'brands',$new_photo,'upload_files');
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
            $brand = Brand::find($id);
            $images = $brand->image;

               //if image exists
            if ($images != null) {
                $image_name = $brand->image->image_name;

                //remove image from server
                $this->delete_image('upload_files', 'brands', $image_name);

             //remove image from DB
                Image::where('imageable_id', $id)
                    ->where('image_name', $image_name)
                    ->delete();
            }


            //remove this category
            Brand::where('id', $id)->delete();

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
