<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calss extends Model
{
    use HasFactory;

     protected $fillable = [
        'car_Name',
        'description',
        'price',
        'capacity',


     ];

}