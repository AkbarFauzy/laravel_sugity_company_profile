<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\News;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->truncate();

        News::create([
            'headline' => 'Pemda Bekasi and Sugity Creatives Tree Planting Event',
            'headline_img' => 'Pemda Bekasi and Sugity Creatives Tree Planting Event.png',
            'content' => 'Direktur PT. Sugity Creatives bersama dengan Pemda berkolaborasi dalam melestarikan lingkungan.',
            'created_at'=>'2022-12-17 02:47:39',
        ]);

        News::create([
            'headline' => 'Sugity Creative CSR in Muara Gembong',
            'headline_img' => 'Sugity Creative CSR in Muara Gembong.png',
            'content' => 'Muara Gembong menyaksikan momen luar biasa: PT. Sugity Creatives dan Pemda Kabupaten Bekasi menanam 45.000 bibit mangrove.',
            'created_at'=>'2022-12-17 02:47:39',
        ]);

        News::create([
            'headline' => 'Muara Gembong Mangrove Forest',
            'headline_img' => 'Muara Gembong Mangrove Forest.png',
            'content' => 'Kolaborasi PT. Sugity Creatives & Pemda Kabupaten Bekasi mengembangkan taman mangrove di Muara Gembong.',
            'created_at'=>'2022-12-17 02:47:39',
        ]);

        News::create([
            'headline' => 'Bingkai Cerita Storytelling Ehon ',
            'headline_img' => 'Bingkai Cerita Storytelling Ehon.png',
            'content' => 'Dalam program literasi, anak-anak diundang untuk mengeksplorasi cerita yang menginspirasi dan mendidik, mendorong imajinasi dan kemampuan bahasa mereka.',
            'created_at'=>'2023-1-21 02:47:39',
        ]);

        News::create([
            'headline' => 'Ruang Literasi Ehon',
            'headline_img' => 'Ruang Literasi Ehon.png',
            'content' => 'PT Sugity Creatives menggelar program Ruang Literasi Anak Dini dengan tujuan menginspirasi anak-anak untuk lebih aktif membaca dan mengembangkan keterampilan bercerita.',
            'created_at'=>'2023-1-21 02:47:39',
        ]);

        News::create([
            'headline' => 'Penanaman 45.000 Pohon Mangrove di Muara Gembong',
            'headline_img' => 'Penanaman 45.000 Pohon Mangrove di Muara Gembong.JPG',
            'content' => 'Dilatarbelakangi dari isu Global besar saat ini yaitu emisi gas CO2 yang terus meningkat, serta isu lingkungan lokal yakni abrasi di wilayah pesisir Bekasi, diperlukan bentuk kegiatan nyata yang dapat membantu Lingkungan, Biodiversitas, serta Sosial Ekonomi masyarakat sekitar. Salah satu bentuk aktivitas dilakukan dari TAB Group Indonesia (SUGITY, TTEC, RPT) yang melanjutkan penanaman pohon mangrove di Kampung Beting, Desa Pantai Bahagia, Kecamatan Muaragembong.',
            'created_at'=>'2023-11-11 02:47:39',
        ]);
    }
}
