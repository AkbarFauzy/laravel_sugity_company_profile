<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProductsContentGallery;

class ProductsContentGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('products_content_gallery')->truncate();

        // ProductsContentGallery::create([
        //    'products_id' => 1,
        //    'type' => "interior",
        //    'img' => ""
        // ]);
    }
}
