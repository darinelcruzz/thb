<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Subscriber extends Model
{
    protected $guarded = [];

    function getFullnameAttribute()
    {
    	return "$this->name $this->lastname $this->lastname2";
    }

    function getReceiptUrlAttribute()
    {
    	return Storage::url($this->receipt);
    }

    function getDocumentUrlAttribute()
    {
    	return Storage::url($this->document);
    }

    function getTypeTitleAttribute()
    {
        if ($this->type == 'estudiante') {
            return "Soy estudiante de " . ucfirst($this->origin2) . " en ";
        } else if ($this->type == "egresado ebc") {
            return "Soy egresado de la Escuela Bancaria Comercial";
        } else if ($this->type == "cliente thb") {
            return "Soy cliente de " . ucfirst($this->origin2);
        }

        return "Soy miembro de ";
    }

    function getWorkplaceTitleAttribute()
    {
        if ($this->workplace) {
            return "- Estoy trabajando en " . ucfirst($this->workplace);
        }

        return;
    }
}
