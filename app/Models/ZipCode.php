<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;

    protected $table = 'zipcodes';
    
    protected $fillable = [
        'city',
        'state',
        'zipcode',
        'latitude',
        'longitude',
        'county',
        'statefull',
    ];
}
