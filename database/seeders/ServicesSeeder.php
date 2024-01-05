<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Services;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->truncate();

        Services::create([
            'name'=>"Vehicle Business",
            'description' => 'Focused on vehicle assembly and conversion, our growth started with Kijang Krista (1996-2022), Toyota Dyna & Hino Dutro (1996-2009), and Toyota NAV1 (2012-2016). Since 2017, our innovation expanded our offerings to Hiace Luxury, Fortuner CCV, Welcab Vehicles (Sienta & Voxy), Public Transport (Hiace & Granmax), and Hiace Medical Mover, emphasizing our commitment to advanced, tailored conversion vehicles.',
            'img' => '1.1-overlay-image-service-section.png'
        ]);

        Services::create([
            'name'=>"Part Business",
            'description' => "As the initial core business in Sugity, the automotive parts business has been running resin injection since 1996, and along its process cultivating into painting & sub assy processes which are advancing toward automation.",
            'img' => '2-overlay-image-service-section.png'
        ]);

        Services::create([
            'name'=>"Mold Business",
            'description' => "Mold Making Business is one of our core business that produces iron-based plastic mold. Initiated in 2004 from in-house mold making by producing small mold, we continued to make bumpers in 2014 to finally reached the ASEAN market in 2018. As one of our business pillars that contributes to the company's profit, we targeted to be the No.1 Mold Maker all over the ASEAN.",
            'img' => '3-overlay-image-service-section.png',
        ]);
    }
}
