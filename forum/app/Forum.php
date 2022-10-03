<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $table = 'forums';

    protected $fillable=['id','name','description'];

    protected $hidden=['password'];

    public function posts(){
    	return $this->hasMany(Post::class);
    }

    public function replies(){
    	return $this->hasManyThrough(Reply::class, Post::class);
    }


  
}
