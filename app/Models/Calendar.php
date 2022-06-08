<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    static $rules=[

        'titulo_evento'=>'required',
        'descripcion_evento'=>'required',
        'start'=>'required',
        'end'=>'required',
    ];

    protected $fillable=['titulo_evento','descripcion_evento', 'start','end'];

      //relacion uno a muchos (inversa) fundacion
      public function fundacion(){
        return $this->belongsToMany(Foundation::class,'id_fun');

    }
}
