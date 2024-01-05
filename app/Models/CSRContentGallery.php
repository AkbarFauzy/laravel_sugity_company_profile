<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSRContentGallery extends Model
{
    use HasFactory;
    protected $table = "csr_content_gallery";

    protected $fillable = [
        'img',
    ];


    public function csr()
    {
        return  $this->belongsTo(CSR::class, 'id', 'csr_id');
    }

}
