<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $fillable = [
        'name',
        'category',
        'left_content',
        'right_content',
        'img',
    ];

    public function gallery()
    {
        return $this->hasMany(ProductsContentGallery::class, 'products_id', 'id');
    }

}
