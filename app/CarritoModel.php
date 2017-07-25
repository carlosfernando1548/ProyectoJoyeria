<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoModel extends Model
{
    protected $table = 'carrito';
    public $timestamps = false;
    protected $primaryKey = "car_id";
}
