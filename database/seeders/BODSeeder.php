<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BOD;

class BODSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bod')->truncate();
        
        BOD::create([
            'name' => 'Masashi Suzuki',
            'position' => 'President Director',
            'affiliation'=> 'Toyota Auto Body Co., Ltd.',
            'img' => 'MasashiSuzuki-Pres.Director.png'
        ]);

        BOD::create([
            'name' => 'Riwan Darmanto',
            'position' => 'Executive Vice President',
            'img' => 'RiwanDarmanto-ExecutiveVicePres.Director.png'
        ]);

        BOD::create([
            'name' => 'Djoko Santoso',
            'position' => 'Director',
            'img' => 'DjokoSantoso-Director.png'
        ]);

        BOD::create([
            'name' => 'Koji Yasuda',
            'position' => 'Director',
            'affiliation'=> 'Toyota Auto Body Co., Ltd.',
            'img' => 'KojiYasuda-Director.png'
        ]);

        BOD::create([
            'name' => 'Asep Chandra P.Y.',
            'position' => 'Director',
            'img' => 'AsepChandra-Director.png'
        ]);

        BOD::create([
            'name' => 'Maya Maharini',
            'position' => 'Director',
            'img' => 'MayaMaharini-Director.png'
        ]);
    }
}
