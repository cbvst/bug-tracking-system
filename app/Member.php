<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable=['mname','address'];

    public $timestamps=true;  // for insert in created_at and updated_at column
}
