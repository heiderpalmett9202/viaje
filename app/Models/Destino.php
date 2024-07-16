<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;
    public function viaje(){// uno a muchos 
        return $this->hasMany('App\Models\Viaje');//hace referencia q un destino uede tener muchos viajes
}
}
