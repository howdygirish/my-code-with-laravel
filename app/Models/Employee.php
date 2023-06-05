<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
//    use HasFactory;
    protected $fillable = ['code', 'email', 'first_name', 'last_name', 'designation_id', 'city_id'];
}
