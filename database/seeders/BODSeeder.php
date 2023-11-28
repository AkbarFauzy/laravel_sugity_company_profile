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
        ]);

        BOD::create([
            'name' => 'Riwan Darmanto',
            'position' => 'Executive Vice President',
        ]);

        BOD::create([
            'name' => 'Djoko Santoso',
            'position' => 'Director',
        ]);

        BOD::create([
            'name' => 'Koji Yasuda',
            'position' => 'Director',
            'affiliation'=> 'Toyota Auto Body Co., Ltd.',
        ]);

        BOD::create([
            'name' => 'Asep Chandra P.Y.',
            'position' => 'Director',
        ]);

        BOD::create([
            'name' => 'Maya Maharini',
            'position' => 'Director',
        ]);
    }
}
