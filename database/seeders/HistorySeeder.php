<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\History;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('history')->truncate();

        History::create([
           'title' => "Sugity Establish",
           'title_ind' => "Sugity Membangun",
           'year' => 1995,
           'img' => "1995_1_1704627681.png"
        ]);

        History::create([
            'title' => "Vehicle Assembly Dyna & Kijang SCM",
            'title_ind' => "Perakitan Kendaraan Dyna & Kijang SCM",
            'year' => 1996,
            'img' => "1996_img_1708500090.png"
        ]);

        // History::create([
        //     'title' => "Vehicle Assembly Dyna",
        //     'year' => 1996,
        //     'img' => "1996 1.jpg"
        // ]);
        
        // History::create([
        //     'title' => "Vehicle Assembly Dyna",
        //     'year' => 1996,
        //     'img' => "1996 2.jpg"
        // ]);

        // History::create([
        //     'title' => "Vehicle Assembly Kijang SCM",
        //     'year' => 1996,
        //     'img' => "1996 3.jpg"
        // ]);

        // History::create([
        //     'title' => "Vehicle Assembly Kijang SCM",
        //     'year' => 1996,
        //     'img' => "1996 4.jpg"
        // ]);

        // History::create([
        //     'title' => "Vehicle Assembly Resin Painting",
        //     'year' => 1996,
        //     'img' => "1996 5.jpg"
        // ]);

        // History::create([
        //     'title' => "Vehicle Assembly Resin Painting",
        //     'year' => 1996,
        //     'img' => "1996 6.jpg"
        // ]);

        // History::create([
        //     'title' => "Vehicle Assembly Resin Painting",
        //     'year' => 1996,
        //     'img' => "1996 7.jpg"
        // ]);

        // History::create([
        //     'title' => "Vehicle Assembly Resin Painting",
        //     'year' => 1996,
        //     'img' => "1996 8.jpg"
        // ]);

        History::create([
            'title' => "Factory 3 Finished",
            'title_ind' => "Pabrik 3 Selesai",
            'year' => 1998,
            'img' => "1998_1_1704627832.jpg"
        ]);

        History::create([
            'title' => "Automotive Part: Plating",
            'title_ind' => "Bagian Otomotif: Pelapisan",
            'year' => 2000,
            'img' => "2000_1_1704627906.jpg"
        ]);

        History::create([
            'title' => "Factory 4 Finished",
            'title_ind' => "Pabrik 4 Selesai",
            'year' => 2001,
            'img' => "2001_2_1704627936.jpg"
        ]);
        
        History::create([
            'title' => "Mold Making",
            'title_ind' => "Pembuatan Cetakan",
            'year' => 2004,
            'img' => "2004_1_1704627952.jpg"
        ]);

        History::create([
            'title' => "TTEC Establish",
            'title_ind' => "TTEC Membangun",
            'year' => 2005,
            'img' => "2005_1_1704627965.jpg"
        ]);

        History::create([
            'title' => "Sugity Plant 2 @ TMMIN Karawang",
            'title_ind' => "Pabrik Sugity 2 @ TMMIN Karawang",
            'year' => 2011,
            'img' => "2011_1_1704627996.jpg"
        ]);

        History::create([
            'title' => "NAV1 Production",
            'title_ind' => "Produksi NAV1",
            'year' => 2012,
            'img' => "2012_1_1704628008.jpg"
        ]);

        History::create([
            'title' => "RPT Establish",
            'title_ind' => "RPT Menetapkan",
            'year' => 2013,
            'img' => "2013_1_1704628021.jpg"
        ]);

        History::create([
            'title' => "HiAce Conversion",
            'title_ind' => "Konversi HiAce",
            'year' => 2017,
            'img' => "2017_1_1704628039.jpg"
        ]);

        History::create([
            'title' => "Education Center Establish",
            'title_ind' => "Membangun Pusat Pendidikan",
            'year' => 2019,
            'img' => "2019_1_1704628051.png"
        ]);

    }
}
