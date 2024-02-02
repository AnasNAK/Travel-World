<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;


    public function picture(){
        
    }
    public function adventures(){
        return $this->hasMany(Adventure::class);

    }
}
