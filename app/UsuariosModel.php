<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    protected $table = "clientes";
    protected $primaryKey = "cli_id";
    public $timestamps = false;
}
