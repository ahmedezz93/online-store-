<?php
namespace App\Repository;

use App\Http\Traits\All_FuncTrait;
use App\Interface\SliderRepositoryInterface;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SliderRepository implements SliderRepositoryInterface
{


    use All_FuncTrait;

    public function index()
    {

      $sliders=Slider::all();
        return view('admin.sliders.sliders',compact('sliders'));
    }






    public function create()
    {

        $images=Slider::all();

        return view('admin.sliders.create_sliders',compact('images'));
    }



    //save image in folder
    public function image_in_folder($request)
    {
        $file = $request->file('dzfile');

        $image_name = $file->getclientoriginalname();
        $file_name=$file->storeAs('/sliders', $image_name, 'sliders');
        return response()->json([
            'name' => $file_name,
            'original_name'=>$file->getClientOriginalName(),
        ]);
    }


    public function store($request)
    {

        try {

            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Slider::create([
                        'photo' => $image,
                    ]);
                }
            }

            flash()->addsuccess(trans('messages.save_message'));
            return back();
            }

            catch (\Exception $e) {
                DB::rollBack();
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }

    }




    public function edit($id)
    {



    }




    public function update($request)
    {
    }




    public function destroy($id)
    {

         $slider= Slider::find($id);

             //remove image from server
          Storage::disk('upload_files')->delete("/".$slider->photo);


        //remove image from DB
        Slider::where('id', $id) ->delete();
        flash()->adderror(trans('messages.delete_message'));
        return back();
    }
}
