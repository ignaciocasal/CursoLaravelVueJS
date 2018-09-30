<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $fillable = ['nombre', 'apellido', 'email'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
