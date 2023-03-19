<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Option extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable=['name','product_id','attribute_id','price'];
    public $translatable=['name'];



    public function products(){

    return $this->belongsTo(Product::class,'product_id');
    }


    public function attributes(){
        return $this -> belongsTo(Attribute::class,'attribute_id');
    }



}
