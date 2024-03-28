<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CSR;

class CSRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('csr')->truncate();
        // DB::table('csr_content_gallery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        CSR::create([
            'headline' => 'Early Childhood Literacy Space',
            'headline_ind' => 'Ruang Literasi Anak Usia Dini',
            'headline_img' => 'small-card-7.jpg',
            'content' => '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>',
            'content_ind' => '<p>Untuk menumbuhkan budaya minat baca di kalangan anak-anak, SUGITY berkolaborasi dengan COMMUNITY READING FORUM untuk menyelenggarakan kompetisi menggambar dan mendongeng untuk anak-anak berusia 4 hingga 7 tahun. Tema acara ini terinspirasi dari buku cerita bergambar (EHON) yang dibuat oleh Motoko Matsuda. Melalui kegiatan ini, diharapkan anak-anak karyawan dan masyarakat sekitar dapat mengembangkan minat baca sejak dini.&nbsp;</p><p>Kegiatan yang bermanfaat: Inisiatif ini telah menerima tanggapan positif dari masyarakat setempat dan pemerintah daerah (PEMDA), dan mendapatkan liputan di enam media lokal.</p>',
            'isPublish'=> 1,
            'created_at'=>'2021-01-31 02:47:39',
        ]);


        CSR::create([
            'headline' => 'Aid Shipment for Cianjur Earthquake Victims',
            'headline_ind' => 'Pengiriman Bantuan untuk Korban Gempa Cianjur',
            'headline_img' => 'small_card_6_1704631502.jpg',
            'content' => '<p>In November 2022, Cianjur experienced an extraordinary earthquake that resulted in loss of life and property. Therefore, on December 9, SUGITY provided donations such as rice, oil, blankets, etc., to the JABAR QUICK RESPONSE institution as volunteers. The hope is that this donation will aid the refugees from Cianjur in returning to normalcy.&nbsp;</p><p>Merit activity: The initiative received appreciation from JABAR QUICK RESPONSE, acknowledging the good commitment from the TOP Management.</p>',
            'content_ind' => '<p>Pada bulan November 2022, Cianjur mengalami bencana gempa bumi yang luar biasa yang mengakibatkan korban jiwa dan harta benda. Oleh karena itu, pada tanggal 9 Desember lalu, SUGITY memberikan bantuan berupa beras, minyak, selimut, dan lain-lain kepada lembaga JABAR QUICK RESPONSE sebagai relawan. Harapannya, donasi ini dapat membantu para pengungsi dari Cianjur untuk kembali ke kehidupan normal.&nbsp;</p><p>Kegiatan yang bermanfaat: Inisiatif ini mendapat apresiasi dari JABAR QUICK RESPONSE, yang mengakui komitmen yang baik dari TOP Management.</p>',
            'isPublish'=> 1,
            'created_at'=>'2021-12-31 02:47:40',
        ]);
        
        CSR::create([
            'headline' => 'Donation for Cianjur Earthquake Victims',
            'headline_ind' => 'Donasi untuk Korban Gempa Bumi Cianjur',
            'headline_img' => 'small-card-5_1704419736.jpg',
            'content' => '<p>In November 2022, Cianjur experienced an extraordinary earthquake that resulted in loss of life and property. Therefore, on December 9, SUGITY provided donations such as rice, oil, blankets, etc., to the JABAR QUICK RESPONSE institution as volunteers. The hope is that this donation will aid the refugees from Cianjur in returning to normalcy.&nbsp;</p><p>Merit activity: The initiative received appreciation from JABAR QUICK RESPONSE, acknowledging the good commitment from the TOP Management.</p>',
            'content_ind' => '<p>Pada bulan November 2022, Cianjur mengalami bencana gempa bumi yang luar biasa yang mengakibatkan korban jiwa dan harta benda. Oleh karena itu, pada tanggal 9 Desember lalu, SUGITY memberikan bantuan berupa beras, minyak, selimut, dan lain-lain kepada lembaga JABAR QUICK RESPONSE sebagai relawan. Harapannya, donasi ini dapat membantu para pengungsi dari Cianjur untuk kembali ke kehidupan normal.&nbsp;</p><p>Kegiatan yang bermanfaat: Inisiatif ini mendapat apresiasi dari JABAR QUICK RESPONSE, yang mengakui komitmen yang baik dari TOP Management.</p>',
            'isPublish'=> 1,
            'created_at'=>'2021-12-31 02:47:41',
        ]);

        CSR::create([
            'headline' => 'Pemda Bekasi and Sugity Creatives Tree Planting Event',
            'headline_ind' => 'Pemda Bekasi dan Sugity Mengadakan Acara Penanaman Pohon',
            'headline_img' => 'small_card_4_1704631412.png',
            'content' => '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region`s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>',
            'content_ind' => '<p>Pada tanggal 17 Desember 2022, SUGITY melakukan penanaman pohon di Pantai Bahagia, Muara Gembong, Bekasi. Inisiatif penanaman ini didorong oleh kerentanan wilayah tersebut terhadap penenggelaman akibat erosi pantai, sehingga perlu dilakukan tindakan pencegahan seperti penanaman pohon. Kegiatan ini direncanakan akan berlangsung dari tahun 2022 hingga 2024, dengan target penanaman sebanyak 45.000 pohon Mangrove. Diharapkan upaya ini dapat membantu menekan laju erosi dan meningkatkan kesejahteraan ekonomi masyarakat setempat.&nbsp;</p><p>Kegiatan yang bermanfaat: Acara ini mendapat respon positif dari masyarakat setempat dan pemerintah daerah (PEMDA), yang menghasilkan liputan dari lima media lokal.</p>',
            'isPublish'=> 1,
            'created_at'=>'2021-12-31 02:47:39',
        ]);

        CSR::create([
            'headline' => 'Sugity Creative CSR in Muara Gembong',
            'headline_ind' => 'CSR Sugity Creative di Muara Gembong',
            'headline_img' => 'SugityCreativeCSRinMuaraGembong.png',
            'content' => '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region`s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>',
            'content_ind' => '<p>Pada tanggal 17 Desember 2022, SUGITY melakukan penanaman pohon di Pantai Bahagia, Muara Gembong, Bekasi. Inisiatif penanaman ini didorong oleh kerentanan wilayah tersebut terhadap penenggelaman akibat erosi pantai, sehingga perlu dilakukan tindakan pencegahan seperti penanaman pohon. Kegiatan ini direncanakan akan berlangsung dari tahun 2022 hingga 2024, dengan target penanaman sebanyak 45.000 pohon Mangrove. Diharapkan upaya ini dapat membantu menekan laju erosi dan meningkatkan kesejahteraan ekonomi masyarakat setempat.&nbsp;</p><p>Kegiatan yang bermanfaat: Acara ini mendapat respon positif dari masyarakat setempat dan pemerintah daerah (PEMDA), yang menghasilkan liputan dari lima media lokal.</p>',
            'isPublish'=> 1,
            'created_at'=>'2021-12-31 02:47:40',
        ]);

        CSR::create([
            'headline' => 'Muara Gembong Mangrove Forest',
            'headline_ind' => 'Hutan Mangrove Muara Gembong',
            'headline_img' => 'MuaraGembongMangroveForest.png',
            'content' => '<p>On December 17, 2022, SUGITY conducted a tree planting ceremony at Pantai Bahagia, Muara Gembong, Bekasi. The planting initiative was driven by the region`s vulnerability to submersion due to coastal erosion, necessitating preventive measures such as tree planting. The activity is planned to take place from 2022 to 2024, with a target of planting a total of 45,000 Mangrove trees. It is hoped that this undertaking will help curb the rate of erosion and enhance the economic well-being of the local community.&nbsp;</p><p>Merit activity: The event received a positive response from the local community and the regional government (PEMDA), resulting in coverage by five local media outlets.</p>',
            'content_ind' => '<p>Pada tanggal 17 Desember 2022, SUGITY melakukan penanaman pohon di Pantai Bahagia, Muara Gembong, Bekasi. Inisiatif penanaman ini didorong oleh kerentanan wilayah tersebut terhadap penenggelaman akibat erosi pantai, sehingga perlu dilakukan tindakan pencegahan seperti penanaman pohon. Kegiatan ini direncanakan akan berlangsung dari tahun 2022 hingga 2024, dengan target penanaman sebanyak 45.000 pohon Mangrove. Diharapkan upaya ini dapat membantu menekan laju erosi dan meningkatkan kesejahteraan ekonomi masyarakat setempat.&nbsp;</p><p>Kegiatan yang bermanfaat: Acara ini mendapat respon positif dari masyarakat setempat dan pemerintah daerah (PEMDA), yang menghasilkan liputan dari lima media lokal.</p>',
            'isPublish'=> 1,
            'created_at'=>'2022-12-17 02:47:41',
        ]);

        CSR::create([
            'headline' => 'Ehon Literacy Space',
            'headline_ind' => 'Ruang Literasi Ehon',
            'headline_img' => 'RuangLiterasiEhon.png',
            'content' => '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>',
            'content_ind' => '<p>Untuk menumbuhkan budaya minat baca di kalangan anak-anak, SUGITY berkolaborasi dengan COMMUNITY READING FORUM untuk menyelenggarakan kompetisi menggambar dan mendongeng untuk anak-anak berusia 4 hingga 7 tahun. Tema acara ini terinspirasi dari buku cerita bergambar (EHON) yang dibuat oleh Motoko Matsuda. Melalui kegiatan ini, diharapkan anak-anak karyawan dan masyarakat sekitar dapat mengembangkan minat baca sejak dini.&nbsp;</p><p>Kegiatan yang bermanfaat: Inisiatif ini telah menerima tanggapan positif dari masyarakat setempat dan pemerintah daerah (PEMDA), dan mendapatkan liputan di enam media lokal.</p>',
            'isPublish'=> 1,
            'created_at'=>'2023-01-21 02:47:39',
        ]);

        CSR::create([
            'headline' => 'Ehon Storytelling Frame',
            'headline_ind' => 'Bingkai Bercerita Ehon',
            'headline_img' => 'BingkaiCeritaStorytellingEhon.png',
            'content' => '<p>To foster a culture of reading interest among children, SUGITY collaborates with the COMMUNITY READING FORUM to organize drawing and storytelling competitions for children aged 4 to 7. The theme of the event is inspired by the picture books (EHON) created by Motoko Matsuda. Through this activity, it is hoped that the children of employees and the local community can develop a strong passion for reading from an early age.&nbsp;</p><p>Merit activity: The initiative has received a positive response from the local community and the regional government (PEMDA), garnering coverage in six local media outlets.</p>',
            'content_ind' => '<p>Untuk menumbuhkan budaya minat baca di kalangan anak-anak, SUGITY berkolaborasi dengan COMMUNITY READING FORUM untuk menyelenggarakan kompetisi menggambar dan mendongeng untuk anak-anak berusia 4 hingga 7 tahun. Tema acara ini terinspirasi dari buku cerita bergambar (EHON) yang dibuat oleh Motoko Matsuda. Melalui kegiatan ini, diharapkan anak-anak karyawan dan masyarakat sekitar dapat mengembangkan minat baca sejak dini.&nbsp;</p><p>Kegiatan yang bermanfaat: Inisiatif ini telah menerima tanggapan positif dari masyarakat setempat dan pemerintah daerah (PEMDA), dan mendapatkan liputan di enam media lokal.</p>',
            'isPublish'=> 1,
            'created_at'=>'2023-01-21 02:47:39',
        ]);

        CSR::create([
            'headline' => 'Handover of Sacrificial Animals to Jamiul Khoir Rawajulang Mosque',
            'headline_ind' => 'Penyerahan Hewan Kurban ke Masjid Jamiul Khoir Rawajulang',
            'headline_img' => 'medium_card_1_1704631568.jpg',
            'content' => '<p>Every year, Sugity carries out its Corporate Social Responsibility (CSR) program in the religious domain, specifically in the form of animal sacrifice donations. This initiative serves as a manifestation of social responsibility towards the surrounding community, with benefits that can be felt by the local residents. This year, Sugity donated a total of 2 cows, distributed in the vicinity of Sugity`s locations in Cibitung and Karawang. In his address, Mr. Suzuki, the President Director of Sugity, conveyed the following points:</p><p>1. Sugity is situated in the midst of the community, and the happiness of the community contributes to Sugity`s own happiness.</p><p>2. The success of Sugity is also derived from the support of the surrounding community; hence, Sugity expresses gratitude for the support and collaboration that has been established.&nbsp;</p><p>The sacrificial animals donated by Sugity were received directly by the chairman of the Mosque Prosperity Council (DKM) of Masjid Jamiul Khoir in Rawajulang, Mr. Amin. In his statement, Mr. Amin expressed, "As the DKM, we express our heartfelt thanks to Sugity, who cares and is consistently active every year in conducting CSR animal sacrifice, which is beneficial for the surrounding community."</p>',
            'content_ind' => '<p>Setiap tahunnya, Sugity melaksanakan program Corporate Social Responsibility (CSR) di bidang keagamaan, khususnya dalam bentuk donasi hewan kurban. Inisiatif ini merupakan wujud tanggung jawab sosial terhadap masyarakat sekitar, yang manfaatnya dapat dirasakan oleh warga sekitar. Tahun ini, Sugity menyumbangkan 2 ekor sapi yang didistribusikan di sekitar lokasi Sugity di Cibitung dan Karawang. Dalam sambutannya, Bapak Suzuki, Presiden Direktur Sugity, menyampaikan beberapa hal sebagai berikut:</p><p>1. Sugity is situated in the midst of the community, and the happiness of the community contributes to Sugity`s own happiness.</p><p>2. Keberhasilan Sugity juga tidak lepas dari dukungan masyarakat sekitar, oleh karena itu, Sugity mengucapkan terima kasih atas dukungan dan kolaborasi yang telah terjalin.&nbsp;</p><p>Hewan kurban yang disumbangkan oleh Sugity diterima langsung oleh Ketua Dewan Kemakmuran Masjid (DKM) Masjid Jamiul Khoir Rawajulang, Bapak Amin. Dalam pernyataannya, Bapak Amin menyampaikan, "Kami selaku DKM mengucapkan terima kasih yang sebesar-besarnya kepada Sugity yang peduli dan konsisten setiap tahunnya dalam melaksanakan CSR kurban yang bermanfaat bagi masyarakat sekitar."</p>',
            'isPublish'=> 1,
            'created_at'=>'2023-06-28 02:47:39',
        ]);

        CSR::create([
            'headline' => 'Planting 45,000 Mangrove Trees in Muara Gembong',
            'headline_ind' => 'Penanaman 45.000 Pohon Mangrove di Muara Gembong',
            'headline_img' => 'mangrove_1_1704700506.jpg',
            'content' => '<p>Against the backdrop of the current global issue of increasing CO2 emissions and the local environmental concern of coastal abrasion in the Bekasi region, there is a need for tangible activities that can contribute to the environment, biodiversity, and the socio-economic well-being of the surrounding community. One such initiative is being undertaken by TAB Group Indonesia (SUGITY, TTEC, RPT), which involves the ongoing planting of mangrove trees in Kampung Beting, Desa Pantai Bahagia, Kecamatan Muaragembong.</p><p>The Muara Gembong Mangrove Forest is a long-term program spanning three years, aiming to plant a total of 45,000 mangrove trees (15,000 per year). In 2023, the ceremonial activity was attended by TAB guests Kimura-san and Kino-san, who conveyed a message: the Trees Planting activity is crucial as a contribution against global warming. They emphasized the importance of starting with small actions to preserve the environment.</p><p>It is hoped that through this CSR initiative, benefits will accrue to all parties involved, including the government, the local community, and the sustainability of our joint venture, SUGITY Company.</p>',
            'content_ind' => '<p>Dengan latar belakang isu global saat ini yaitu peningkatan emisi CO2 dan masalah lingkungan lokal yaitu abrasi pantai di wilayah Bekasi, maka diperlukan kegiatan nyata yang dapat memberikan kontribusi terhadap lingkungan, keanekaragaman hayati, dan kesejahteraan sosial-ekonomi masyarakat sekitar. Salah satu inisiatif tersebut dilakukan oleh TAB Group Indonesia (SUGITY, TTEC, RPT), yang melibatkan penanaman pohon bakau yang sedang berlangsung di Kampung Beting, Desa Pantai Bahagia, Kecamatan Muaragembong.</p><p>Hutan Mangrove Muara Gembong merupakan program jangka panjang yang berlangsung selama tiga tahun, dengan target penanaman sebanyak 45.000 pohon bakau (15.000 pohon per tahun). Pada tahun 2023, kegiatan seremonial dihadiri oleh tamu dari TAB yaitu Kimura-san dan Kino-san, yang menyampaikan pesan bahwa kegiatan penanaman pohon sangat penting sebagai kontribusi melawan pemanasan global. Mereka menekankan pentingnya memulai dengan tindakan kecil untuk melestarikan lingkungan.</p><p>Diharapkan melalui inisiatif CSR ini, manfaatnya dapat dirasakan oleh semua pihak yang terlibat, termasuk pemerintah, masyarakat setempat, dan keberlanjutan perusahaan patungan kami, SUGITY Company.</p>',
            'isPublish'=> 1,
            'created_at'=>'2023-11-11 02:47:39',
        ]);
    }
}
