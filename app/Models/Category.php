<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded=[];
    public $translatable=['name'];
    protected $table='categories';

    public function products(){

        return $this->belongsToMany(Product::class,'products_categories');
    }

    public function sections(){

        return $this->hasMany(Section::class,'cat_id');
    }


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}




?>
