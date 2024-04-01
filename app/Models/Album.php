<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    }
