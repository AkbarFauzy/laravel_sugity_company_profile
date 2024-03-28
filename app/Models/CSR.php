<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSR extends Model
{
    use HasFactory;
    protected $table = "csr";

    protected $fillable = [
        'headline',
        'headline_ind',
        'headline_img',
        'content',
        'content_ind',
        'isPublish',
        'created_at'
    ];

    public function gallery()
    {
        return $this->hasMany(CSRContentGallery::class, 'csr_id', 'id');
    }

}
