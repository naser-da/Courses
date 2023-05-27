<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function professor() {
        return $this->hasOne(User::class);
    }

    public function students() {
        return $this->hasMany(User::class);
    }
}
