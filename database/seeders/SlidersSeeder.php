<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Sliders;


class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->truncate();

        Sliders::create([
            'img'=>"banner-1-landing.png",
        ]);

        Sliders::create([
            'img'=>"banner-2-v3.png",
        ]);

        Sliders::create([
            'img'=>"banner-3-v3.png",
        ]);

        Sliders::create([
            'img'=>"banner-4-v4.png",
        ]);

        Sliders::create([
            'img'=>"banner-5-landing.png",
        ]);
    }
}
