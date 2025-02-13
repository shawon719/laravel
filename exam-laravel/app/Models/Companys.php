<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Companys extends Model
{
    //
    use HasFactory;
    

    public function brand(){
        return $this->hasMany(Brand::class);
    }
}
