<?php
namespace App\Repository;

use App\Interface\settingrepositoryinterface;
use App\Models\Setting;

class settingrepository implements settingrepositoryinterface{

    public function shippings($type){


        if($type=="free"){

            $setting=Setting::first();
            $shipping_cost=$setting->free_shipping_cost;
            $shipping_name_ar=$setting->gettranslation('free_shipping_label','ar');
            $shipping_name_en=$setting->gettranslation('free_shipping_label','en');

            return view('admin.shippings.shippings',compact('shipping_name_ar','shipping_name_en','shipping_cost','type','setting'));
        }


        elseif($type=="local"){

            $setting=Setting::first();
            $shipping_cost=$setting->local_shipping_cost;
            $shipping_name_ar=$setting->gettranslation('local_label','ar');
            $shipping_name_en=$setting->gettranslation('local_label','en');

            return view('admin.shippings.shippings',compact('shipping_name_ar','shipping_name_en','shipping_cost','type','setting'));

        }

        elseif($type=="outer"){

            $setting=Setting::first();
            $shipping_cost=$setting->outer_shipping_cost;
            $shipping_name_ar=$setting->gettranslation('outer_label','ar');
            $shipping_name_en=$setting->gettranslation('outer_label','en');



             return view('admin.shippings.shippings',compact('shipping_name_ar','shipping_name_en','shipping_cost','type','setting'));

        }
    }


    public function shipping_update($request){

if($request->type=="free"){

    setting::where("id",$request->id)->update([

        "free_shipping_label"=>["ar"=>$request->shipping_name_ar,"en"=>$request->shipping_name_en],
        "free_shipping_cost"=>$request->plain_value,

      ]);





}


elseif($request->type=="local"){

    setting::where("id",$request->id)->update([
        "local_label"=>["ar"=>$request->shipping_name_ar,"en"=>$request->shipping_name_en],
        "local_shipping_cost"=>$request->plain_value,
    ]);


}

elseif($request->type=="outer"){

    setting::where("id",$request->id)->update([
        "outer_label"=>["ar"=>$request->shipping_name_ar,"en"=>$request->shipping_name_en],
        "outer_shipping_cost"=>$request->plain_value,
    ]);


}
        flash()->addSuccess(trans("messages.update_message"));
        return back();

}



}
