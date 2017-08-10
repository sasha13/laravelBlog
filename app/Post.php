<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public static function published()
    {
        return self::where('published', 1)->get();
    }

    public static function unpublished()
    {
        return self::where('published', 0)->get();
    }
}
