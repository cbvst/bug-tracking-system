<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=['mname','address'];
    protected $table='members';

    public $timestamps=false;
}
