<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortToPort extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'port_detail_id',
        'delivery_port_name',
        'delivery_country',
        'delivery_latitude',
        'delivery_longitude',
        'price',
    ];
}
