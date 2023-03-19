<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded=[];
    public $translatable=['name'];


    public function sections(){

        return $this->belongsToMany(Section::class,'products_sections');

    }

    public function tags(){

        return $this->belongsToMany(Tag::class,'products_tags');
    }

    public function images(){

        return $this->morphMany(Image::class,'imageable');
    }


}


