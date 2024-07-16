<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    use HasFactory;
    public function viaje()//esto es de uno a muchos 
    {
        return $this->hasMany('App\Models\Viaje');//belongsto es traer muchos
    }
}
