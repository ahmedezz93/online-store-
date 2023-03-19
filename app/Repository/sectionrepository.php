<?php
namespace App\Repository;

use App\Http\Traits\All_FuncTrait;
use App\Interface\sectionrepositoryinterface;
use App\Models\Category;
use App\Models\Image;
use App\Models\Section;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class sectionrepository implements sectionrepositoryinterface{

use All_FuncTrait;
    public function index(){

        $sections=Section::all();

        return view('admin.sections.sections',compact('sections'));
    }

    public function create(){

        $categories=Category::all();
        return view('admin.sections.create_section',compact('categories'));

    }


    public function store($request){
        DB::begintransaction();
        try{

            if($request->is_active){
                $request->request->add(['status'=>1]);
        }
        else{
          $request->request->add(['status'=>0]);

        }


        //create section

         $section= Section::create([

        "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],
        "slug"=>Str::slug($request->slug),
        "cat_id"=>$request->cat_id,
        "status"=>$request->status,
          ]);


          //create photo
          if ($request->hasfile('photo')) {
              $photo_name = $request->photo->getclientoriginalname();
               $this->uploadimages($request->photo, 'sections', $photo_name, 'upload_files');

              Image::create([
                  'image_name' => $photo_name,
                  'imageable_id' => $section->id,
                  'imageable_type' => Section::class,
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
        $section = Section::find($id);
        $categories=Category::all();
        if (!$section) {
            flash()->adderror(trans('messages.data not found'));
            return back();
        } else {
            return view('admin.sections.edit_section', compact('section','categories'));
        }
    }


    public function update($request)
    {

        DB::beginTransaction();
        try {

       if(!$request->has('is_active')){

             $request->request->add(['status'=>0]);
          }
             else{

             $request->request->add(['status'=>1]);
           }

        $section=Section::find($request->id);
          $section->update([
            "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],
            "slug"=> Str::slug($request->slug),
            "cat_id"=>$request->cat_id,
           "status"=> $request->status,
          ]);


         if($request->hasfile('photo')){


            $new_photo=$request->photo->getclientoriginalname();
            $old_image=$request->old_image;

      //   if photo not equal photo in DB -->delete old photo and create new image
            if($new_photo!=$old_image){

                $this->delete_image('upload_files', 'sections',$old_image);
                $this->uploadimages($request->photo,'sections',$new_photo,'upload_files');
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




    public function delete($id){


        DB::beginTransaction();
        try {
            $section = Section::find($id);
            $images = $section->image;

               //if image exists
            if ($images != null) {
                $image_name = $section->image->image_name;

                //remove image from server
                $this->delete_image('upload_files', 'sections', $image_name);

             //remove image from DB
                Image::where('imageable_id', $id)
                    ->where('image_name', $image_name)
                    ->delete();
            }


            //remove this section
            Section::where('id', $id)->delete();

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
