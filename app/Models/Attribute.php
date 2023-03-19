<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Attribute extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable=['name'];
    public $translatable=['name'];

    public function options(){

        return $this->hasMany(Option::class,'attribute_id');
    }

}
