<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
     // Define the table (optional, as Laravel will assume it's the plural form of the model name)
     protected $table = 'students';
}
