<?php

namespace App\Models;

use App\Models\student;
use App\Models\subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class section extends Model
{
    use HasFactory;

    public function students() {
        return $this->hasMany(student::class);
    }

    public function subjects() {
        return $this->belongsToMany(subject::class)->withPivot('duree', 'coefficient');
    }
}
