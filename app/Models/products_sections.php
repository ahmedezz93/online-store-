<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_sections extends Model
{
    use HasFactory;
    protected $fillable=['product_id','section_id'];
    
}
