<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsContentGallery extends Model
{
    use HasFactory;
    protected $table = "products_content_gallery";

    protected $fillable = [
        'img',
        'type'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
