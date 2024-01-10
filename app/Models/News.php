<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";

    protected $fillable = [
        'headline',
        'headline_img',
        'content',
        'isPublish',
        'created_at'
    ];

    public function gallery()
    {
        return $this->hasMany(NewsContentGallery::class, 'news_id', 'id');
    }

}
