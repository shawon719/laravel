<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;                                                                                                                     

class Post extends Model
{
    use HasFactory;
    protected $table='posts';

    public function users(){
        return $this->belongsTo(User::class);
    }
}
