<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait All_FuncTrait{


public function uploadimages($image,$folder_name,$file_name,$disk){

  return  $image->storeAs('/'.$folder_name ,$file_name,$disk);


}

public function delete_image($disk,$folder_name,$file_name){

  return  Storage::disk($disk)->delete("/".$folder_name."/".$file_name);

}


}


?>
