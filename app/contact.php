<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //Mass Assignment
    protected $fillable = ['name','phone','message'];
}
