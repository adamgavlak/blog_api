<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: gavlak
 * Date: 01/05/2017
 * Time: 19:22
 */
class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content'];
}