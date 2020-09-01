<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    // Relação Contato -> categoria (1:N) 
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
