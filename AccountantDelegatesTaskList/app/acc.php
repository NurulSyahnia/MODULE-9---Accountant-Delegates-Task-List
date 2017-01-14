<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acc extends Model
{
    protected $fillable = ['acc_id' , 'acc_name' , 'email' , 'password'];
}
