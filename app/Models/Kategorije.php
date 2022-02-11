<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorije extends Model
{
    public $timestamps = false;
    protected $table='kategorije';
    use HasFactory;

    protected $fillable = [
        'imeKat',
        'opisKat',
        'slikaKat',
    ];
}
