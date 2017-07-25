<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model
{
    protected $table = 'productos';
    public $timestamps = false;
    protected $primaryKey = "pro_id";
}
