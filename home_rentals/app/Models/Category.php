<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'parent_id', 'child_parent_id', 'category_image', 'is_deleted', 'is_active', 'createdby_id', 'created_at', 'updated_at'
    ];

    public function Product()
    {
        return $this->hasMany(Productservice::class, 'id', 'category');
    }
}
