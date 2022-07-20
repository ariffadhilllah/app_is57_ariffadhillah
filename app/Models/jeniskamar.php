<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jeniskamar extends Model
{
    public function kamar(){
        return $this->belongTo(kamar::class);
    }
}
    