<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Companys;

class Brand extends Model
{
    //
    use HasFactory;
    public function companys(){
        return $this->belongsTo(Companys::class);
    }
}
