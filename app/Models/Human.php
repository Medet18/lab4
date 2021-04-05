<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    protected $table = 'humans';
    protected $fillable = ['Name', 'LastName','Email','Image'];
    use HasFactory;
}
