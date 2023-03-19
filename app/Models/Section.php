<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded=[];
    public $translatable=['name'];
public function categories(){

    return $this->belongsTo(Category::class,'cat_id');
}


public function products(){

    return $this->belongsToMany(Product::class,'products_sections');
}


public function image()
{
    return $this->morphOne(Image::class, 'imageable');
}


}
?>
