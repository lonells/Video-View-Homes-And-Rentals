<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'country_id', 'region_id', 'city'
    ];

    public function Product()
    {
        return $this->hasMany(Productservice::class, 'id', 'city');
    }
}
