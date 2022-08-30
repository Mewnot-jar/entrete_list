<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    use HasFactory;

    public function entretenimientos()
    {
        return $this->hasMany(Formato::class, 'id');
    }
}
