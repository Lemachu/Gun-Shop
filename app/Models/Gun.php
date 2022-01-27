<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gun extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
            'nazivGun',
            'idBrend',
            'idKat',
            'opis',
            'cijena',
            'rating',
            'slikaGun',
    ];
}
