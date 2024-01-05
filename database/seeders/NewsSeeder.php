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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('news')->truncate();
        DB::table('news_content_gallery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        News::create([
            'headline' => 'Early Childhood Literacy Space',
            'headline_img' => 'PemdaBekasiandSugityCreativesTreePlantingEvent.png',
            'content' => 'Direktur PT. Sugity Creatives bersama dengan Pemda berkolaborasi dalam melestarikan lingkungan.',
            'isPublish'=> 1,
            'created_at'=>'2022-12-09 02:47:39',
        ]);


        News::create([
            'headline' => 'Aid Shipment for Cianjur Earthquake Victims',
            'headline_img' => 'PemdaBekasiandSugityCreativesTreePlantingEvent.png',
            'content' => 'Direktur PT. Sugity Creatives bersama dengan Pemda berkolaborasi dalam melestarikan lingkungan.',
            'isPublish'=> 1,
            'created_at'=>'2022-12-09 02:47:40',
        ]);
        
        News::create([
            'headline' => 'Donation for Cianjur Earthquake Victims',
            'headline_img' => 'PemdaBekasiandSugityCreativesTreePlantingEvent.png',
            'content' => 'Direktur PT. Sugity Creatives bersama dengan Pemda berkolaborasi dalam melestarikan lingkungan.',
            'isPublish'=> 1,
            'created_at'=>'2022-12-09 02:47:41',
        ]);

        News::create([
            'headline' => 'Pemda Bekasi and Sugity Creatives Tree Planting Event',
            'headline_img' => 'PemdaBekasiandSugityCreativesTreePlantingEvent.png',
            'content' => 'Direktur PT. Sugity Creatives bersama dengan Pemda berkolaborasi dalam melestarikan lingkungan.',
            'isPublish'=> 1,
            'created_at'=>'2022-12-17 02:47:39',
        ]);

        News::create([
            'headline' => 'Sugity Creative CSR in Muara Gembong',
            'headline_img' => 'SugityCreativeCSRinMuaraGembong.png',
            'content' => 'Muara Gembong menyaksikan momen luar biasa: PT. Sugity Creatives dan Pemda Kabupaten Bekasi menanam 45.000 bibit mangrove.',
            'isPublish'=> 1,
            'created_at'=>'2022-12-17 02:47:40',
        ]);

        News::create([
            'headline' => 'Muara Gembong Mangrove Forest',
            'headline_img' => 'MuaraGembongMangroveForest.png',
            'content' => 'Kolaborasi PT. Sugity Creatives & Pemda Kabupaten Bekasi mengembangkan taman mangrove di Muara Gembong.',
            'isPublish'=> 1,
            'created_at'=>'2022-12-17 02:47:41',
        ]);

        News::create([
            'headline' => 'Ehon Literacy Space',
            'headline_img' => 'RuangLiterasiEhon.png',
            'content' => 'PT Sugity Creatives menggelar program Ruang Literasi Anak Dini dengan tujuan menginspirasi anak-anak untuk lebih aktif membaca dan mengembangkan keterampilan bercerita.',
            'isPublish'=> 1,
            'created_at'=>'2023-1-21 02:47:39',
        ]);

        News::create([
            'headline' => 'Ehon Storytelling Frame',
            'headline_img' => 'BingkaiCeritaStorytellingEhon.png',
            'content' => 'Dalam program literasi, anak-anak diundang untuk mengeksplorasi cerita yang menginspirasi dan mendidik, mendorong imajinasi dan kemampuan bahasa mereka.',
            'isPublish'=> 1,
            'created_at'=>'2023-1-21 02:47:39',
        ]);

        News::create([
            'headline' => 'Handover of Sacrificial Animals to Jamiul Khoir Rawajulang Mosque',
            'headline_img' => 'Penanaman45.000PohonMangrovediMuaraGembong.JPG',
            'content' => 'Dilatarbelakangi dari isu Global besar saat ini yaitu emisi gas CO2 yang terus meningkat, serta isu lingkungan lokal yakni abrasi di wilayah pesisir Bekasi, diperlukan bentuk kegiatan nyata yang dapat membantu Lingkungan, Biodiversitas, serta Sosial Ekonomi masyarakat sekitar. Salah satu bentuk aktivitas dilakukan dari TAB Group Indonesia (SUGITY, TTEC, RPT) yang melanjutkan penanaman pohon mangrove di Kampung Beting, Desa Pantai Bahagia, Kecamatan Muaragembong.',
            'isPublish'=> 1,
            'created_at'=>'2023-11-11 02:47:39',
        ]);

        News::create([
            'headline' => 'Planting 45,000 Mangrove Trees in Muara Gembong',
            'headline_img' => 'Penanaman45.000PohonMangrovediMuaraGembong.JPG',
            'content' => 'Dilatarbelakangi dari isu Global besar saat ini yaitu emisi gas CO2 yang terus meningkat, serta isu lingkungan lokal yakni abrasi di wilayah pesisir Bekasi, diperlukan bentuk kegiatan nyata yang dapat membantu Lingkungan, Biodiversitas, serta Sosial Ekonomi masyarakat sekitar. Salah satu bentuk aktivitas dilakukan dari TAB Group Indonesia (SUGITY, TTEC, RPT) yang melanjutkan penanaman pohon mangrove di Kampung Beting, Desa Pantai Bahagia, Kecamatan Muaragembong.',
            'isPublish'=> 1,
            'created_at'=>'2023-11-11 02:47:39',
        ]);
    }
}
