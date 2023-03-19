<?php
namespace App\Repository;

use App\Interface\Optionrepositoryinterface;
use App\Models\Attribute;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Optionrepository implements Optionrepositoryinterface
{
    public function index()
    {

        $options=Option::all();
           return view('admin.options.options',compact('options'));
    }






    public function create()
    {
        $data['products']=Product::select('id','name')->get();
        $data['attributes']=Attribute::select('id','name')->get();

        return view('admin.options.create_options',$data);
    }




    public function store($request)
    {
          Option::create([
            'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
           "product_id"=>$request->product_id,
           "attribute_id"=>$request->attribute_id,
           "price"=>$request->price,
          ]);

          flash()->addsuccess(trans('messages.save_message'));
          return back();
    }




    public function edit($id)
    {
           $data['option']=Option::find($id);
           $data['products']=Product::select('name','id')->get();
           $data['attributes']=Attribute::select('name','id')->get();

           if(! $data['option']){
            flash()->adderror(trans('messages.data not found'));
            return redirect()->route('options');
           }
           else{

            return view('admin.options.edit_options',$data);

           }
    }




    public function update($request)
    {

        $option=Option::find($request->id);
         $option->update($request->only([

            'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
           "product_id"=>$request->product_id,
           "attribute_id"=>$request->attribute_id,
           "price"=>$request->price,

         ]));
         flash()->addsuccess(trans('messages.update_message'));
         return back();

    }




    public function destroy($id)
    {

       Option::destroy($id);
       flash()->adderror(trans('messages.delete_message'));
       return back();
       }

}
