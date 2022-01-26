<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drive extends Model
{
    protected $table = "Drives";
    public $fillable = ['title','decription','file'];
}
