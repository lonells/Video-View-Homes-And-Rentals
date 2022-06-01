<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productservice extends Model
{
    use HasFactory;

    protected $table = 'productservices';
    protected $primaryKey = 'id';
    protected $fillable = [
        'city', 'category', 'product', 'service', 'about', 'price', 'quantity_available', 'company', 'website', 'product_size', 'status', 'live_stream_price', 'pick_ship', 'servicephoto', 'servicevideo', 'created_at', 'updated_at'
    ];

    public function City()
    {
        return $this->belongsTo(City::class, 'city', 'id');
    }
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}