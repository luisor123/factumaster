<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table ='facturas';
    protected $fillable =['numero','detalles'];
    public $timestamps = false;
}
