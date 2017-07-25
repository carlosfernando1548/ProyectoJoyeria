<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosModel extends Model
{
    protected  $table = "comentarios";
    public $timestamps = false;
    protected $primaryKey = "com_id";
}
