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
        'name_ind',
        'category',
        'left_content',
        'left_content_ind',
        'right_content',
        'right_content_ind',
        'img',
    ];

    public function gallery()
    {
        return $this->hasMany(ProductsContentGallery::class, 'products_id', 'id');
    }

}
