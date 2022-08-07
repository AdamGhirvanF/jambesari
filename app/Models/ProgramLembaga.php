<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramLembaga extends Model
{
    use HasFactory;

    public function lembaga()
    {
        return $this->belongsTo('App\Models\Lembaga', 'lembaga_id', 'id');
    }
}
