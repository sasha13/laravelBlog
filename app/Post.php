<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function published()
    {
        return self::where('published', 1)->get();
    }

    public static function unpublished()
    {
        return self::where('published', 0)->get();
    }

    public function addComment($body)
    {
        $this->comments()->create(['body' => $body]);
    }
}
