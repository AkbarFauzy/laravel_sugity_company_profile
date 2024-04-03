<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();
        // DB::table('products_content_gallery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Product::create([
            'id' => 1,
            'name' => 'Gran Max Jaklingko',
            'name_ind' => 'Gran Max Jaklingko',
            'category' => 'Public Transport',
            'img' => '3_1704635663.png',
            'left_content' => '<ul><li>Japan OEM product for Electric Door</li><li>Parts &amp; Wiring installation meets OEM standard</li><li>Durable designed for Heavy Duty used</li><li>Providing highest &amp; reliable material quality</li><li>Highest standard for safety installation &amp; fire hazards protection</li></ul>',
            'left_content_ind' => '<ul><li>Produk OEM Jepang untuk Pintu Listrik</li><li>Pemasangan Suku Cadang &amp; Pengkabelan memenuhi standar OEM</li><li>Dirancang tahan lama untuk Tugas Berat yang digunakan</li><li>Memberikan kualitas material tertinggi &amp; dapat diandalkan</li><li>Standar tertinggi untuk instalasi keselamatan &amp; perlindungan bahaya kebakaran</li></ul>',
            'right_content' => '<ul><li>Power Slide Door</li><li>Telematics component</li><li>AC Double Blower</li><li>Seat &amp; Floor modification</li><li>Cabin Partition</li><li>Speed &amp; Rear Buzzer</li></ul>',
            'right_content_ind' => '<ul><li>Pintu Geser Otomatis</li><li>Komponen Telematika</li><li>AC Double Blower</li><li>Modifikasi Kursi &amp; Lantai</li><li>Partisi Kabin</li><li>Kecepatan &amp; Bel Belakang</li></ul>',
        ]);

        Product::create([
            'id' => 2,
            'name' => 'Gran Max Wira Wiri SBY',
            'name_ind' => 'Gran Max Wira Wiri SBY',
            'category' => 'Public Transport',
            'img' => '2_1704634494.png',
            'left_content' => '<ul><li>OEM product for Electric Door</li><li>Parts &amp; Wiring installation meets OEM standard</li><li>Durable designed for Heavy Duty used</li><li>Providing highest &amp; reliable material quality</li><li>Highest standard for safety installation &amp; fire hazards protection</li></ul>',
            'left_content_ind' => '<ul><li>Produk OEM untuk Pintu Listrik</li><li>Pemasangan Suku Cadang &amp; Pengkabelan memenuhi standar OEM</li><li>Dirancang tahan lama untuk Tugas Berat yang digunakan</li><li>Memberikan kualitas material tertinggi &amp; dapat diandalkan</li><li>Standar tertinggi untuk instalasi keselamatan &amp; perlindungan bahaya kebakaran</li></ul>',
            'right_content' => '<ul><li>Power Slide Door</li><li>Telematics component</li><li>AC Double Blower</li><li>Seat &amp; Floor modification</li><li>Cabin Partition</li><li>Speed &amp; Rear Buzzer</li></ul>',
            'right_content_ind' => '<ul><li>Pintu Geser Otomatis</li><li>Komponen Telematika</li><li>AC Double Blower</li><li>Modifikasi Kursi &amp; Lantai</li><li>Partisi Kabin</li><li>Kecepatan &amp; Bel Belakang</li></ul>',
        ]);

        Product::create([
            'id' => 3,
            'name' => 'HiAce Wira-Wiri SBY',
            'name_ind' => 'HiAce Wira-Wiri SBY',
            'category' => 'Public Transport',
            'img' => '1_1704634476.png',
            'left_content' => '<ul><li>OEM product for Electric Door</li><li>Parts &amp; Wiring installation meets OEM standard</li><li>Durable designed for Heavy Duty used</li><li>Providing highest &amp; reliable material quality</li><li>Highest standard for safety installation &amp; fire hazards protection</li></ul>',
            'left_content_ind' => '<ul><li>Produk OEM untuk Pintu Listrik</li><li>Pemasangan Suku Cadang &amp; Pengkabelan memenuhi standar OEM</li><li>Dirancang tahan lama untuk Tugas Berat yang digunakan</li><li>Memberikan kualitas material tertinggi &amp; dapat diandalkan</li><li>Standar tertinggi untuk instalasi keselamatan &amp; perlindungan bahaya kebakaran</li></ul>',
            'right_content' => '<ul><li>Power Slide Door</li><li>Telematics component</li><li>Speed Buzzer</li><li>Rear Buzzer</li><li>Fire Extinguisher</li></ul>',
            'right_content_ind' => '<ul><li>Pintu Geser Otomatis</li><li>Komponen Telematika</li><li>Bel Kecepatan</li><li>Bel Belakang</li><li>Alat Pemadam Api Ringan</li></ul>',
        ]);

        Product::create([
            'id' => 4,
            'name' => 'Voxy Welcab',
            'name_ind' => 'Voxy Welcab',
            'category' => 'Healthcare Vehicle',
            'img' => '1_1704636435.png',
            'left_content' => '<ul><li>Japan OEM Product&nbsp;</li><li>Parts &amp; Wiring installation meets OEM Standard&nbsp;</li></ul><p><strong>Optional accsesoris :&nbsp;</strong></p><ul><li>Body stand belt&nbsp;</li><li>Strap (4 Point) for wheelchair</li></ul>',
            'left_content_ind' => '<ul><li>Produk OEM Jepang&nbsp;</li><li>Pemasangan suku cadang &amp; Pengkabelan memenuhi Standar OEM&nbsp;</li></ul><p><strong>Akesoris opsional :&nbsp;</strong></p><ul><li>Sabuk penyangga tubuh&nbsp;</li><li>Tali (4 Titik) untuk kursi roda</li></ul>',
            'right_content' => '<ul><li>Operation Button (Reclining, Sliding, Lifting)</li><li>Foot Rest</li><li>Arm Rest</li><li>Wireless Remote</li><li>Remote holder</li></ul>',
            'right_content_ind' => '<ul><li>Tombol Operasi (Berbaring, Geser, Mengangkat)</li><li>Sandaran Kaki</li><li>Sandaran Tangan</li><li>Remote Nirkabel</li><li>Dudukan remote</li></ul>',
        ]);

        Product::create([
            'id' => 5,
            'name' => 'HiAce Medical Mover',
            'name_ind' => 'HiAce Medical Mover',
            'category' => 'Healthcare Vehicle',
            'img' => '2_1704636368.png',
            'left_content' => '<ul><li>Parts &amp; Wiring installation meets OEM standard</li><li>Providing highest &amp; reliable material quality</li><li>Highest standard for safety installation &amp; fire hazards protection</li></ul>',
            'left_content_ind' => '<ul><li>Pemasangan Suku Cadang &amp; Pengkabelan memenuhi standar OEM</li><li>Memberikan kualitas material tertinggi &amp; dapat diandalkan</li><li>Standar tertinggi untuk instalasi keselamatan &amp; perlindungan bahaya kebakaran</li></ul>',
            'right_content' => '<ul><li>Rotated Seat 360º</li><li>Paramedic seat with storage</li><li>Headlining by FRP + Lighting</li><li>Compact Cabinet</li></ul>',
            'right_content_ind' => '<ul><li>Kursi Diputar 360º</li><li>Kursi paramedis dengan tempat penyimpanan</li><li>Headlining oleh FRP + Pencahayaan</li><li>Kabinet Ringkas</li></ul>',
        ]);

        Product::create([
            'id' => 6,
            'name' => 'HiAce Ambulance',
            'name_ind' => 'HiAce Ambulans',
            'category' => 'Healthcare Vehicle',
            'img' => '4_1704636460.png',
            'left_content' => '<ul><li>Durable</li><li>Spacious Interior</li><li>Part &amp; Wiring installation meet OE Standard</li><li>Providing highest &amp; reliable material quality</li></ul>',
            'left_content_ind' => '<ul><li>Tahan lama</li><li>Interior yang Luas</li><li>Pemasangan Suku Cadang &amp; Pengkabelan memenuhi Standar OE</li><li>Memberikan kualitas material yang terbaik &amp; dapat diandalkan</li></ul>',
            'right_content' => '<ul><li>Sliding Door</li><li>Central Gas Set (2 Tank)</li><li>Foldable bench seat + storage</li><li>Rear Upper Handle</li><li>LED Light Bar</li><li>Rear Step Bar</li><li>LED Lamp movable</li><li>Compact Cabinet</li></ul>',
            'right_content_ind' => '<ul><li>Pintu Geser</li><li>Kursi bangku yang dapat dilipat + penyimpanan</li><li>Bilah Lampu LED</li><li>Lampu LED dapat dipindahkan</li><li>Perangkat Gas Sentral (2 Tangki)</li><li>Pegangan Atas Belakang</li><li>Bilah Langkah Belakang </li><li>Kabinet Ringkas</li></ul>',
        ]);

        Product::create([
            'id' => 9,
            'name' => 'Gran Max Ambulance',
            'name_ind' => 'Gran Max Ambulans',
            'category' => 'Healthcare Vehicle',
            'img' => 'gran_max_ambulancethumbg_1704795187.png',
            'left_content' => '<ul><li>Compact cabinet design</li><li>Wiring installations meet OE Standard</li><li>Safety for anchorage seat, floor, base stretcher, cabinet</li></ul>',
            'left_content_ind' => '<ul><li>Desain kabinet yang ringkas</li><li>Instalasi kabel memenuhi Standar OE</li><li>Keamanan untuk kursi jangkar, lantai, tandu dasar, kabinet</li></ul>',
            'right_content' => '<ul><li>Compact Cabinet</li><li>Paramedic seat with storage</li><li>Portable Sink</li><li>Base Stretcher with folding scoop storage</li><li>Fire extinguisher</li><li>Patien lamp</li><li>Central oxygen</li></ul>',
            'right_content_ind' => '<ul><li>Kabinet Ringkas</li><li>Kursi paramedis dengan tempat penyimpanan</li><li>Wastafel Portabel</li><li>Tandu Dasar dengan penyimpanan sendok lipat</li><li>Alat pemadam kebakaran</li><li>Lampu Patien</li><li>Oksigen sentral</li></ul>',
        ]);

        Product::create([
            'id' => 10,
            'name' => 'Innova Ambulance',
            'name_ind' => 'Innova Ambulans',
            'category' => 'Healthcare Vehicle',
            'img' => '5_1704636500.png',
            'left_content' => '<ul><li>Alarm Anti-Theft</li><li>Fire Alarm (Smoke Detector)</li><li>Ceiling Light LED</li><li>Fire Extinguisher</li></ul>',
            'left_content_ind' => '<ul><li>Alarm Anti-Pencurian</li><li>Alarm Kebakaran (Detektor Asap)</li><li>Lampu Plafon LED</li><li>Alat Pemadam Api Ringan</li></ul>',
            'right_content' => '<ul><li>Standard Equipment</li><li>Camera 360º</li><li>SOS Toolkit</li><li>Front &amp; Rear Camera + Inside Cash Box</li></ul>',
            'right_content_ind' => '<ul><li>Perlengkapan Standar</li><li>Kamera 360º</li><li>Peralatan SOS</li><li>Kamera Depan &amp; & Belakang + Kotak Uang di Dalam</li></ul>',
        ]);

        Product::create([
            'id' => 11,
            'name' => 'Cash Carrier Fortuner',
            'name_ind' => 'Fortuner Pembawa Uang Tunai',
            'category' => 'Export Vehicle',
            'img' => '1_1704636556.png',
            'left_content' => '<ul><li>GPS</li><li>Door Sensor</li><li>Fatigue Sensor</li><li>RFID</li><li>Parking Camera</li><li>Barcode Scanner</li><li>Cut Off Engine</li><li>Panic Button</li></ul>',
            'left_content_ind' => '<ul><li>GPS</li><li>Sensor Pintu</li><li>Sensor Kelelahan</li><li>RFID</li><li>Kamera Parkir</li><li>Pemindai Kode Batang</li><li>Mesin Potong</li><li>Tombol Panik</li></ul>',
            'right_content' => '<ul><li>LED Lamp</li><li>Rear Upper Handle</li><li>Sliding partition with door access</li><li>Floor</li><li>FRP (Food Grade)</li><li>Electric Power Standby Unit</li><li>Stainless Steel (Frame)</li></ul>',
            'right_content_ind' => '<ul><li>Lampu LED</li><li>Pegangan Atas Belakang</li><li>Partisi geser dengan akses pintu</li><li>Lantai</li><li>FRP (Food Grade)</li><li>Unit Siaga Daya Listrik</li><li>Baja Tahan Karat (Rangka)</li></ul>',
        ]);

        Product::create([
            'id' => 12,
            'name' => 'Fortuner Ambulance',
            'name_ind' => 'Fortuner Ambulans',
            'category' => 'Export Vehicle',
            'img' => '2_1704636571.png',
            'left_content' => '<ul><li>Part &amp; wiring installation</li><li>Providing highest &amp; reliable material quality</li></ul>',
            'left_content_ind' => '<ul><li>Pemasangan suku cadang &amp; kabel</li><li>Memberikan kualitas bahan tertinggi &amp; dapat diandalkan</li></ul>',
            'right_content' => '<ul><li>Genset</li><li>Karaoke Set</li><li>Table + Chair</li><li>Outdoor umbrella</li></ul>',
            'right_content_ind' => '<ul><li>Genset</li><li>Perangkat Karaoke</li><li>Meja + Kursi</li><li>Payung luar ruangan</li></ul>',
        ]);

        Product::create([
            'id' => 13,
            'name' => 'Instrument Panel',
            'name_ind' => 'Panel Instrumen',
            'category' => 'Interior Part',
            'img' => '2_1704636627_1712025982.png',
            'left_content' => '["Fortuner","Yaris Cross","Xenia","Rocky","Dyna","Kijang Innova","Veloz","Avanza","Raize","Dutro"]',
            'left_content_ind' => '["Fortuner","Yaris Cross","Xenia","Rocky","Dyna","Kijang Innova","Veloz","Avanza","Raize","Dutro"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 14,
            'name' => 'Door Trim',
            'name_ind' => 'Trim Pintu',
            'category' => 'Interior Part',
            'img' => '3_1704636768_1712026372.png',
            'left_content' => '["Fortuner","Veloz","Xenia","Ayla","Dyna","Kijang Innova","Avanza","Agya","Raize","Dutro"]',
            'left_content_ind' => '["Fortuner","Veloz","Xenia","Ayla","Dyna","Kijang Innova","Avanza","Agya","Raize","Dutro"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 15,
            'name' => 'Quarter Trim',
            'name_ind' => 'Trim Seperempat',
            'category' => 'Interior Part',
            'img' => '5_1704636808_1712026571.png',
            'left_content' => '["Fortuner","Yaris Cross","Sigra","Ayla","Kijang Innova","Calya","Agya"]',
            'left_content_ind' => '["Fortuner","Yaris Cross","Sigra","Ayla","Kijang Innova","Calya","Agya"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 16,
            'name' => 'Back Door Trim',
            'name_ind' => 'Trim Pintu Belakang',
            'category' => 'Interior Part',
            'img' => 'back_door_trim_1708576397_1712026682.png',
            'left_content' => '["Fortuner","Kijang Innova"]',
            'left_content_ind' => '["Fortuner","Kijang Innova"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 17,
            'name' => 'Box Console',
            'name_ind' => 'Kotak Konsol',
            'category' => 'Interior Part',
            'img' => '4_1704636789_1712026776.png',
            'left_content' => '["Kijang Innova","Terios","Sigra","Rush","Calya","APV"]',
            'left_content_ind' => '["Kijang Innova","Terios","Sigra","Rush","Calya","APV"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 18,
            'name' => 'Door Glove',
            'name_ind' => 'Sarung Tangan Pintu',
            'category' => 'Interior Part',
            'img' => '6_1704636827.png',
            'left_content' => '["Fortuner","Xenia","Rocky","Sigra","Dyna","Kijang Innova","Rush","Raize","Ertiga","Dutro","Avanza","Terios","Calya"]',
            'left_content_ind' => '["Fortuner","Xenia","Rocky","Sigra","Dyna","Kijang Innova","Rush","Raize","Ertiga","Dutro","Avanza","Terios","Calya"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 19,
            'name' => 'Register',
            'name_ind' => 'Register',
            'category' => 'Interior Part',
            'img' => '7_1704636856.png',
            'left_content' => '["Fortuner","Terios","Avanza","Kijang Innova","Rush","Xenia"]',
            'left_content_ind' => '["Fortuner","Terios","Avanza","Kijang Innova","Rush","Xenia"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 20,
            'name' => 'Front Bumper',
            'name_ind' => 'Bemper Depan',
            'category' => 'Exterior Part',
            'img' => '2_1704636962_1712027461.png',
            'left_content' => '["Fortuner","Yaris Cross","Xenia","Sigra","Gran Max","Dutro","Kijang Innova","Veloz","Avanza","Calya","Dyna","Ranger"]',
            'left_content_ind' => '["Fortuner","Yaris Cross","Xenia","Sigra","Gran Max","Dutro","Kijang Innova","Veloz","Avanza","Calya","Dyna","Ranger"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 21,
            'name' => 'Rear Bumper',
            'name_ind' => 'Bemper Belakang',
            'category' => 'Exterior Part',
            'img' => '1_1704636946_1712027611.png',
            'left_content' => '["Fortuner","Yaris Cross","Xenia","Sigra","Gran Max","Kijang Innova","Veloz","Avanza","Calya"]',
            'left_content_ind' => '["Fortuner","Yaris Cross","Xenia","Sigra","Gran Max","Kijang Innova","Veloz","Avanza","Calya"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 22,
            'name' => 'Grille',
            'name_ind' => 'Grille',
            'category' => 'Exterior Part',
            'img' => '3_1704636979_1712027753.png',
            'left_content' => '["Fortuner","Yaris Cross","Xenia","Sigra","Dyna","Ertiga","Kijang Innova","Veloz","Avanza","Calya","Dutro"]',
            'left_content_ind' => '["Fortuner","Yaris Cross","Xenia","Sigra","Dyna","Ertiga","Kijang Innova","Veloz","Avanza","Calya","Dutro"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 23,
            'name' => 'Spoiler',
            'name_ind' => 'Spoiler',
            'category' => 'Exterior Part',
            'img' => '4_1704636999_1712027873.png',
            'left_content' => '["Yaris Cross"]',
            'left_content_ind' => '["Yaris Cross"]',
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 27,
            'name' => 'Big Mold',
            'name_ind' => 'Cetakan Besar',
            'category' => 'Mold',
            'img' => '1_1704637145.png',
            'left_content' => null,
            'left_content_ind' => null,
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 28,
            'name' => 'Medium Mold',
            'name_ind' => 'Cetakan Sedang',
            'category' => 'Mold',
            'img' => '2_1704637128.png',
            'left_content' => null,
            'left_content_ind' => null,
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 29,
            'name' => 'Small Mold',
            'name_ind' => 'Cetakan Kecil',
            'category' => 'Mold',
            'img' => '3_1704637111.png',
            'left_content' => null,
            'left_content_ind' => null,
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 30,
            'name' => 'Fortuner Patrol',
            'name_ind' => 'Patroli Fortuner',
            'category' => 'Export Vehicle',
            'img' => '10_1704637257.png',
            'left_content' => null,
            'left_content_ind' => null,
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 31,
            'name' => 'Vios Patrol',
            'name_ind' => 'Patroli Vios',
            'category' => 'Export Vehicle',
            'img' => '9_1704637225.png',
            'left_content' => null,
            'left_content_ind' => null,
            'right_content' => null,
            'right_content_ind' => null,
        ]);

        Product::create([
            'id' => 32,
            'name' => 'Car Promotion',
            'name_ind' => 'Mobil Promosi',
            'category' => 'Other',
            'img' => '2_1704726247.png',
            'left_content' => '<ul><li>Part &amp; wiring installation</li><li>Providing highest &amp; reliable material quality</li></ul>',
            'left_content_ind' => '<ul><li>Pemasangan suku cadang &amp; kabel</li><li>Memberikan kualitas bahan tertinggi &amp; dapat diandalkan</li></ul>',
            'right_content' => '<ul><li>Genset</li><li>Karaoke Set</li><li>Table + Chair</li><li>Outdoor umbrella</li></ul>',
            'right_content_ind' => '<ul><li>Genset</li><li>Perangkat Karaoke</li><li>Meja + Kursi</li><li>Payung luar ruangan</li></ul>',
        ]);

        // Product::create([
        //     'name' => 'HiAce Wira Wiri',
        //     'category' => 'Public Transport',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Gran Max Wira Wiri',
        //     'category' => 'Public Transport',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Gran Max Jaklingko',
        //     'category' => 'Public Transport',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'HiAce Jaklingko',
        //     'category' => 'Public Transport',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Voxy Welcab',
        //     'category' => 'Healthcare Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'HiAce Welcab',
        //     'category' => 'Healthcare Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Sienta Welcab',
        //     'category' => 'Healthcare Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'HiAce Ambulance',
        //     'category' => 'Healthcare Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Innova Ambulance',
        //     'category' => 'Healthcare Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Gran Max Ambulance',
        //     'category' => 'Healthcare Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Fortuner Cash Carier',
        //     'category' => 'Export Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        
        // Product::create([
        //     'name' => 'Fortuner Ambulance',
        //     'category' => 'Export Vehicle',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Sub Assy Instrument Panel',
        //     'category' => 'Interior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Instrument Panel',
        //     'category' => 'Interior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Door Trim',
        //     'category' => 'Interior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Box Console',
        //     'category' => 'Interior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Quarter Door Trim',
        //     'category' => 'Interior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Door Glove',
        //     'category' => 'Interior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Register',
        //     'category' => 'Interior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Rear Bumper Yaris',
        //     'category' => 'Exterior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Front Bumper Yaris',
        //     'category' => 'Exterior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Grille',
        //     'category' => 'Exterior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Spoiler',
        //     'category' => 'Exterior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Mud Guard',
        //     'category' => 'Exterior Part',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Small Mold',
        //     'category' => 'Mold',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Medium Mold',
        //     'category' => 'Mold',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);

        // Product::create([
        //     'name' => 'Big Mold',
        //     'category' => 'Mold',
        //     'left_content' => '',
        //     'right_content' => '',
        //     'img' => '',
        // ]);
    }
}
