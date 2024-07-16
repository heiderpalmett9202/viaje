<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    public function viajeros(){// uno a muchos 
        return $this->belongsTo('App\Models\Viajero');
}
    public function destino(){// uno a muchos
        return $this->belongsTo('App\Models\Destino');//hace referencia q un viaje tiene un destino
}
    public function origen(){// uno a muchos
    return $this->belongsTo('App\Models\Origen');//hace referencia q un viaje tiene un origen
}
}
