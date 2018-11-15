<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillalble = ['title','content'];
    protected $primaryKey = 'id';
}
