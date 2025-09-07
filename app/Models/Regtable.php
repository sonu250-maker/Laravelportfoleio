<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regtable extends Model
{
    protected $table = 'regtable';
    protected $fillable = ['name','email','password'];
}
