<?php

namespace App\Models\Common;

use Database\Factories\DesignationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected static function newFactory()
    {
        return new DesignationFactory();
    }
}
