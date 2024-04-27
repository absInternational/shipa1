<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'banner_image',
        'image2',
        'image3',
        'heading_one',
        'para_one',
        'heading_two',
        'para_two_one',
        'para_two_two',
        'para_two_three',
        'para_two_four',
        'para_two_five',
        'para_two_six',
        'heading_three',
        'para_three',
    ];

    protected $dates = ['deleted_at'];
}
