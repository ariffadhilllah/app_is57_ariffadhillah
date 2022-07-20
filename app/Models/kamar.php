<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    public function jeniskamars(){
        return $this->hasOne(jeniskamar::class,'id','jeniskamars_id');
    }
    
}
