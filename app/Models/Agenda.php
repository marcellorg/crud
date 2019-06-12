<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Agenda extends Model
{
    protected $fillable = [
        'nome' ,
        'user_id' ,
        'tel_fixo' ,
        'tel_celular' ,
        'email' ,
    ];

}
