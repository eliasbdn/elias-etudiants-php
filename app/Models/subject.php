<?php

namespace App\Models;

use App\Models\section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class subject extends Model
{
    use HasFactory;

    public function sections() {
        return $this->belongsToMany(section::class);
    }

    public function programs() {
        return $this->belongsToMany(program::class);
    }
}
