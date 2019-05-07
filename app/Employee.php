<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable  = ['name','email','department','designation','address','country'];
}
