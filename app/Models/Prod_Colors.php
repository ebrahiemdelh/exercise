<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_Colors extends Model
{
    use HasFactory;
    protected $fillable = [
        'color',
        'hex'
    ];
    protected $table = 'prod_colors';
}
