<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Officer extends Model
{
    //using Soft deletes
    use SoftDeletes;


    protected $dates = ['deleted_at'];
}
