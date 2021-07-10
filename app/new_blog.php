<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new_blog extends Model
{
    protected $table = 'new_blogs';
    protected $fillable =['tile', 'Shortdescription','Description','image'];
    public $timestamp =false;

}
