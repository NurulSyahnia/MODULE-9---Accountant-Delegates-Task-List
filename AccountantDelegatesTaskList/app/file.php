<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $fillable = ['filename' , 'date' , 'type' , 'size' , 'priority'];
}
