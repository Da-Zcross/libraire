<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Summary extends Model
{
    use HasFactory;

    public function user(){
        // Un Summary appartient(belongsTo) à 1 User
        return $this->belongsTo(User::class);
    }
}
