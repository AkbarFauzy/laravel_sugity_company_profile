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
        DB::table('products_content_gallery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Product::create([
            'name' => 'HiAce Wira Wiri',
            'category' => 'Public Transport',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Gran Max Wira Wiri',
            'category' => 'Public Transport',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Gran Max Jaklingko',
            'category' => 'Public Transport',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'HiAce Jaklingko',
            'category' => 'Public Transport',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Voxy Welcab',
            'category' => 'Healthcare Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'HiAce Welcab',
            'category' => 'Healthcare Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Sienta Welcab',
            'category' => 'Healthcare Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'HiAce Ambulance',
            'category' => 'Healthcare Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Innova Ambulance',
            'category' => 'Healthcare Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Gran Max Ambulance',
            'category' => 'Healthcare Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Fortuner Cash Carier',
            'category' => 'Export Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        
        Product::create([
            'name' => 'Fortuner Ambulance',
            'category' => 'Export Vehicle',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Sub Assy Instrument Panel',
            'category' => 'Interior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Instrument Panel',
            'category' => 'Interior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Door Trim',
            'category' => 'Interior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Box Console',
            'category' => 'Interior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Quarter Door Trim',
            'category' => 'Interior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Door Glove',
            'category' => 'Interior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Register',
            'category' => 'Interior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Rear Bumper Yaris',
            'category' => 'Exterior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Front Bumper Yaris',
            'category' => 'Exterior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Grille',
            'category' => 'Exterior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Spoiler',
            'category' => 'Exterior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Mud Guard',
            'category' => 'Exterior Part',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Small Mold',
            'category' => 'Mold',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Medium Mold',
            'category' => 'Mold',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);

        Product::create([
            'name' => 'Big Mold',
            'category' => 'Mold',
            'left_content' => '',
            'right_content' => '',
            'img' => '',
        ]);
    }
}
