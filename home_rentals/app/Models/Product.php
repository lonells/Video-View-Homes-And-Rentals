<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getcolor()
    {
        $color=Color::select('name')->distinct()->pluck('name');
        return $color;
    }

    public static function getsize()
    {
        $size=Size::select('name')->distinct()->pluck('name');
        return $size;
    }
}
