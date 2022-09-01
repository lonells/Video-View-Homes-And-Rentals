<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputDevices extends Model
{
    use HasFactory;

    protected $table = 'inputdevices';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'name', 'description', 'image', 'status', 'created_at', 'updated_at'
    ];

}