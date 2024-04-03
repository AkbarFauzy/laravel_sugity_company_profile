<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\NewsContentGallery;

class NewsContentGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('news_content_gallery')->truncate();

        // NewsContentGallery::create([
        //    'news_id' => 1,
        //    'img' => "",
        // ]);
    }
}
