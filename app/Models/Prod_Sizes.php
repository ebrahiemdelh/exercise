<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_Sizes extends Model
{
    use HasFactory;
    protected $fillable = [
        'size',
        'description'
    ];
    protected $table = 'prod_sizes';
}
