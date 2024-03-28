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

        // Sliders::create([
        //     'img'=>"banner-1-landing.png",
        // ]);

        Sliders::create([
            'img' => 'banner_2_v3_1704728912.png',
            'tagline' => '<p><span style="font-size:56px;"><strong>HiAce Wira-Wiri</strong></span><br><span style="font-size:21px;">The TOYOTA HiAce Wira-Wiri has been developed specifically for the secure and efficient transportation&nbsp;</span><br><span style="font-size:21px;">of cash, valuables, and passengers, prioritizing a seamless blend of security and operational&nbsp;</span><br><span style="font-size:21px;">effectiveness.</span></p>',
            'tagline_ind' => '<p><span style="font-size:56px;"><strong>HiAce Wira-Wiri</strong></span><br><span style="font-size:21px;">TOYOTA HiAce Wira-Wiri dikembangkan secara khusus untuk pengangkutan uang tunai, barang berharga, dan penumpang yang&nbsp;</span><br><span style="font-size:21px;">aman dan efisien, dengan mengutamakan perpaduan antara keamanan dan efektivitas operasional.&nbsp;</span></p>',
            'page' => 'Home',
            'position' => 'Bottom Left',
            'x_offset' => null,
            'y_offset' => null
        ]);

        Sliders::create([
            'img' => 'banner_3_v3_1704731591.png',
            'tagline' => '<p><span style="font-size:56px;"><strong>Instrument Panel</strong></span></p><p><span style="font-size:21px;">The instrument panel sub-assembly: a vital component orchestrating crucial vehicle data and controls,&nbsp;</span><br><span style="font-size:21px;">ensuring seamless functionality and convenience at your fingertips.</span><br>&nbsp;</p>',
            'tagline_ind' => '<p><span style="font-size:56px;"><strong>Instrument Panel</strong></span></p><p><span style="font-size:21px;">Sub-perakitan panel instrumen: komponen penting yang mengatur data dan kontrol kendaraan yang penting,&nbsp;</span><br><span style="font-size:21px;">memastikan fungsionalitas dan kenyamanan yang mulus di ujung jari Anda.</span><br>&nbsp;</p>',
            'page' => 'Home',
            'position' => 'Bottom Left',
            'x_offset' => null,
            'y_offset' => null
        ]);

        Sliders::create([
            'img' => 'banner_4_v4_1704731784.png',
            'tagline' => '<p><span style="font-size:56px;"><strong>Vehicle Assembly</strong></span></p><p><span style="font-size:21px;">Sugity, linked to Toyota Autobody, shifted from assembly to innovative vehicle conversions since 2017,</span><br><span style="font-size:21px;">prioritizing quality, safety, and durability.&nbsp;</span></p>',
            'tagline_ind' => '<p><span style="font-size:56px;"><strong>Perakitan Kendaraan</strong></span></p><p><span style="font-size:21px;">Sugity, yang terkait dengan Toyota Autobody, beralih dari perakitan ke konversi kendaraan yang inovatif sejak tahun 2017,</span><br><span style="font-size:21px;">dengan memprioritaskan kualitas, keamanan, dan daya tahan.&nbsp;</span></p>',
            'page' => 'Home',
            'position' => 'Top Right',
            'x_offset' => null,
            'y_offset' => null
        ]);

        // Sliders::create([
        //     'img'=>"banner-5-landing.png",
        // ]);
    }
}
