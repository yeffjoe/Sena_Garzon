<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // Relación con el modelo User (instructor)
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}