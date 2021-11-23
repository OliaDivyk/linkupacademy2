<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;
    
    public function cards() {
        return $this->hasMany(Cards::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
