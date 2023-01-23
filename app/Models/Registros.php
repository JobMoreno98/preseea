<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Registros extends Model
{
    use HasFactory;
   /* use Searchable;

    public function searchableAs()
    {
        return [
            'codigo'=> $this->codigo,
            'nivel_educativo'=> $this->nivel_educativo,
            'sexo'=> $this->sexo,
            'generacion'=> $this->generacion,
            'text_archivo'=> $this->text_archivo,
        ];
    }*/
}
