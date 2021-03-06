<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];

    protected $casts = [
        'likeCount' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setCommentAttribute($value)
    {
        $this->attributes['post'] = str_replace(PHP_EOL , "<br>" , $value);
    }
    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

}
