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
           'year' => 1995,
           'img' => "1-whereitall.jpg"
        ]);

        History::create([
            'title' => "Vehicle Assembly Dyna",
            'year' => 1996,
            'img' => "1996 1.jpg"
        ]);
        
        History::create([
            'title' => "Vehicle Assembly Dyna",
            'year' => 1996,
            'img' => "1996 2.jpg"
        ]);

        
        History::create([
            'title' => "Vehicle Assembly Kijang SCM",
            'year' => 1996,
            'img' => "1996 3.jpg"
        ]);

        History::create([
            'title' => "Vehicle Assembly Kijang SCM",
            'year' => 1996,
            'img' => "1996 4.jpg"
        ]);

        History::create([
            'title' => "Vehicle Assembly Resin Painting",
            'year' => 1996,
            'img' => "1996 5.jpg"
        ]);

        History::create([
            'title' => "Vehicle Assembly Resin Painting",
            'year' => 1996,
            'img' => "1996 6.jpg"
        ]);

        History::create([
            'title' => "Vehicle Assembly Resin Painting",
            'year' => 1996,
            'img' => "1996 7.jpg"
        ]);

        History::create([
            'title' => "Vehicle Assembly Resin Painting",
            'year' => 1996,
            'img' => "1996 8.jpg"
        ]);

        History::create([
            'title' => "Factory 3 Finished",
            'year' => 1996,
            'img' => "1998 1.jpg"
        ]);

        History::create([
            'title' => "Automotive Part: Plating",
            'year' => 2000,
            'img' => "2000 1.jpg"
        ]);

        History::create([
            'title' => "Factory 4 Finished",
            'year' => 2001,
            'img' => "2001 2.jpg"
        ]);
        
        History::create([
            'title' => "Mold Making",
            'year' => 2004,
            'img' => "2004 1.jpg"
        ]);

        History::create([
            'title' => "TTEC Establish",
            'year' => 2005,
            'img' => "2005 1.jpg"
        ]);

        History::create([
            'title' => "Sugity Plant 2 @ TMMIN Karawang",
            'year' => 2011,
            'img' => "2011 1.jpg"
        ]);

        History::create([
            'title' => "NAV1 Production",
            'year' => 2012,
            'img' => "2012 1.jpg"
        ]);

        History::create([
            'title' => "RPT Establish",
            'year' => 2013,
            'img' => "2013 1.jpg"
        ]);

        History::create([
            'title' => "HiAce Conversion",
            'year' => 2017,
            'img' => "2017 1.jpg"
        ]);

        History::create([
            'title' => "Education Center Establish",
            'year' => 2019,
            'img' => "2019 1.png"
        ]);

    }
}
