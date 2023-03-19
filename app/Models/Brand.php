<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Brand extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded=[];
    public $translatable=['name'];


    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }



}

?>
