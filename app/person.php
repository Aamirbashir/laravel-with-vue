<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
   protected $table='person';
   protected $fillable=['name','phoneno','email','dob','gender','bio','image'];
}
