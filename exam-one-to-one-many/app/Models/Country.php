<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Post;
use App\Models\User;

class Country extends Model
{
    use HasFactory;
    protected $table='countries';
    // public function posts()
    // {
    //     return $this->hasManyThrough(Post::class,User::class);
    // }


    public function posts()
{
    return $this->hasManyThrough(Post::class, User::class, 'country_id', 'user_id', 'id', 'id');
}

}
