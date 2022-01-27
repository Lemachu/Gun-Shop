<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'imeBrand',
        'opisBrand',
        'drzava',
    ];
}
