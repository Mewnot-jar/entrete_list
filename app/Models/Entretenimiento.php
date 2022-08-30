<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretenimiento extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function formatos(){
        return $this->belongsTo(Formato::class, 'formato_id');
    }
}
