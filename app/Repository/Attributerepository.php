<?php
namespace App\Repository;

use App\Interface\Attributerepositoryinterface;
use App\Models\Attribute;
use Illuminate\Support\Facades\Storage;

class Attributerepository implements Attributerepositoryinterface
{
    public function index()
    {

        $attributes=Attribute::all();
        return view('admin.attributes.attributes',compact('attributes'));
    }






    public function create()
    {
        return view('admin.attributes.create_attributes');
    }




    public function store($request)
    {

        Attribute::create([

            "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],

        ]);

        flash()->addsuccess(trans('messages.save_message'));
        return back();

    }




    public function edit($id)
    {

        $attribute=Attribute::find($id);

        if(!$attribute){

            flash()->adderror(trans('messages.data not found'));
            return redirect()->route('attributes');


        }

        else{

            return view('admin.attributes.edit_attributes',compact('attribute'));

        }

    }




    public function update($request)
    {

          $attribute=Attribute::find($request->id);

          if(!$attribute){

            flash()->adderror(trans('messages.data not found'));
            return redirect()->route('attributes');

          }


            else{
                $attribute->update([
                    "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],

                ]);

            }


            flash()->addsuccess(trans('messages.update_message'));
            return back();
    }




    public function destroy($id)
    {

      Attribute::destroy($id);
      flash()->adderror(trans('messages.delete_message'));
      return back();
    }
}
