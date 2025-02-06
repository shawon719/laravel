<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsInfo extends Model
{
    use HasFactory;
   public function phone(): HasOne
    {
        return $this->hasOne(SubtypesStudent::class);
    }
}
