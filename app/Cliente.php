<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table ='clientes';
    protected $fillable =['nombre','ruc','direccion','telefono','email'];
    public $timestamps = false;
}
