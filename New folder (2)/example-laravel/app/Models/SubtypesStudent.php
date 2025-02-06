<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubtypesStudent extends Model
{
   use HasFactory;
   public function  stypes(){
    return $this->belongsTo(StudentsInfo::class);
   }
}
