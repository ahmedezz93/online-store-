<?php
namespace App\Repository;

use App\Http\Traits\All_FuncTrait;
use App\Interface\AdsRepositoryinterface;
use App\Models\Ad;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdsRepository implements AdsRepositoryinterface
{

    use All_FuncTrait;

    public function index()
    {

        $ads=Ad::all();
        return view('admin.ads.ads',compact('ads'));
    }






    public function create()
    {
        return view('admin.ads.create_ads');
    }




    public function store($request)
    {
        try {

            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Ad::create([
                        'image_name' => $image,
                        'zone'=>$request->zone,
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









    public function destroy($id)
    {

         $ad= Ad::find($id);

             //remove image from server
          Storage::disk('upload_files')->delete("/".$ad->image_name);


        //remove image from DB
        Ad::where('id', $id) ->delete();
        flash()->adderror(trans('messages.delete_message'));
        return back();
    }


         //save image in folder
    public function save_images($request)
    {
        $file = $request->file('dzfile');

        $image_name = $file->getclientoriginalname();
        $file_name=$file->storeAs('/advertisements', $image_name, 'upload_files');
        return response()->json([
            'name' => $file_name,
            'original_name'=>$file->getClientOriginalName(),
        ]);
    }

}
