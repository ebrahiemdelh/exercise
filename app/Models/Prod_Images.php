<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'alt_text'
    ];
    protected $table = 'prod_images';
}
