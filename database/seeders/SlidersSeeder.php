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

        Sliders::create([
            'img' => 'slider_product_vehicle_page_1705289328.png',
            'tagline' => '<p><span style="font-size:48px;">HiAce JakLingko</span></p><p><span style="font-size:68px;"><i><strong>Spacious &amp; Comfort</strong></i></span></p>',
            'tagline_ind' => '<p><span style="font-size:48px;">HiAce JakLingko</span></p><p><span style="font-size:68px;"><i><strong>Luas &amp; Nyaman</strong></i></span></p>',
            'page' => 'Vehicle Business',
            'position' => 'Bottom Left',
            'x_offset' => -4,
            'y_offset' => null
        ]);

        Sliders::create([
            'img' => 'cover_part_business_1708569174.png',
            'tagline' => '<p><span style="font-size:48px;"><strong>Sub Assy Process Automation</strong></span><br><span style="font-size:48px;"><i><strong>Proficient and Agile</strong></i></span></p>',
            'tagline_ind' => '<p><span style="font-size:48px;"><strong>Otomatisasi Proses Sub Assy</strong></span><br><span style="font-size:48px;"><i><strong>Mahir dan Tangkas</strong></i></span></p>',
            'page' => 'Part Business',
            'position' => 'Middle Left',
            'x_offset' => -4,
            'y_offset' => null
        ]);

        Sliders::create([
            'img' => '3_slider_product_overview_page_1705292140.png',
            'tagline' => '<p><strong><span style="font-size:48px;">Mold Making</span></p><p><span style="font-size:38px;"><i>Quality and Precious</i></span></strong></p>',
            'tagline_ind' => '<p><strong><span style="font-size:48px;">Pembuatan Cetakan</span></p><p><span style="font-size:38px;"><i>Berkualitas dan Berharga</i></span></strong></p>',
            'page' => 'Mold Business',
            'position' => 'Bottom Right',
            'x_offset' => -4,
            'y_offset' => null
        ]);
    }
}
