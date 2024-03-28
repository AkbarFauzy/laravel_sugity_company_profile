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
            'name_ind'=>"Bisnis Kendaraan",
            'description' => 'Focused on vehicle assembly and conversion, our growth started with Kijang Krista (1996-2022), Toyota Dyna & Hino Dutro (1996-2009), and Toyota NAV1 (2012-2016). Since 2017, our innovation expanded our offerings to Hiace Luxury, Fortuner CCV, Welcab Vehicles (Sienta & Voxy), Public Transport (Hiace & Granmax), and Hiace Medical Mover, emphasizing our commitment to advanced, tailored conversion vehicles.',
            'description_ind' => 'Berfokus pada perakitan dan konversi kendaraan, pertumbuhan kami dimulai dengan Kijang Krista (1996-2022), Toyota Dyna & Hino Dutro (1996-2009), dan Toyota NAV1 (2012-2016). Sejak tahun 2017, inovasi kami memperluas penawaran kami ke Hiace Luxury, Fortuner CCV, Kendaraan Welcab (Sienta & Voxy), Angkutan Umum (Hiace & Granmax), dan Hiace Medical Mover, yang menekankan komitmen kami untuk kendaraan konversi yang canggih dan disesuaikan.',
            'img' => '1.1-overlay-image-service-section.png'
        ]);

        Services::create([
            'name'=>"Part Business",
            'name_ind'=>"Bisnis Suku Cadang",
            'description' => "As the initial core business in Sugity, the automotive parts business has been running resin injection since 1996, and along its process cultivating into painting & sub assy processes which are advancing toward automation.",
            'description_ind' => "Sebagai bisnis inti awal di Sugity, bisnis suku cadang otomotif telah menjalankan injeksi resin sejak tahun 1996, dan dalam prosesnya berkembang menjadi proses pengecatan & sub assy yang semakin maju ke arah otomatisasi.",
            'img' => '2-overlay-image-service-section.png'
        ]);

        Services::create([
            'name'=>"Mold Business",
            'name_ind'=>"Bisnis Cetakan",
            'description' => "Mold Making Business is one of our core business that produces iron-based plastic mold. Initiated in 2004 from in-house mold making by producing small mold, we continued to make bumpers in 2014 to finally reached the ASEAN market in 2018. As one of our business pillars that contributes to the company's profit, we targeted to be the No.1 Mold Maker all over the ASEAN.",
            'description_ind' => "Bisnis Pembuatan Cetakan adalah salah satu bisnis inti kami yang memproduksi cetakan plastik berbahan dasar besi. Dimulai pada tahun 2004 dari pembuatan cetakan internal dengan memproduksi cetakan kecil, kami terus membuat bumper pada tahun 2014 hingga akhirnya mencapai pasar ASEAN pada tahun 2018. Sebagai salah satu pilar bisnis yang berkontribusi terhadap keuntungan perusahaan, kami menargetkan untuk menjadi Pembuat Cetakan No.1 di seluruh ASEAN.",
            'img' => '3-overlay-image-service-section.png',
        ]);
    }
}
