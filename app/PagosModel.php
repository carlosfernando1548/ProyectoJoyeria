<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagosModel extends Model
{
    protected $table = 'comprobantes';
    public $timestamps = false;
    protected $primaryKey = "co_id";
}
