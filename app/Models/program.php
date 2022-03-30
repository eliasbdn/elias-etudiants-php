<?php

namespace App\Models;

use App\Models\subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class program extends Model
{
    use HasFactory;

    public function subjects() {
        return $this->belongsToMany(subject::class);
    }
}

