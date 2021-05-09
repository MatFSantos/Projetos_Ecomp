<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federation extends Model
{
    use HasFactory;

    public function enterprises(){
        return $this->hasMany(Enterprise::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
