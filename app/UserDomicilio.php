<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    
    protected $fillable = [
        'id',
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad'
    ];
}
