<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model
{
    protected $table = "categorias";
    public $timestamps = false;
    protected $primaryKey = "cat_id";
}
