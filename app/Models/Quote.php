<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'text',
        'source'
    ];

    public static function getRandom()
    {
        return self::inRandomOrder()->first();
    }

    public static function getNextRandom($previous_id)
    {
        return self::inRandomOrder()->where('id', '!=', $previous_id)->first();
    }
}
