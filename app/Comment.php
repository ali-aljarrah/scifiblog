<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =['id', 'name', 'email', 'comment', 'blog_id'];

    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
