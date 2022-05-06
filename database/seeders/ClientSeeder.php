<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->insert([
            [
                'name' => 'Amanda Swalayan',
                'legal_name' => 'PT Amanda Swalayan Sejahtera',
                'logo' => 'logo-ultra-jaya.png',
                'is_deleted' => false,
            ],
            [
                'name' => 'Budi Steel',
                'legal_name' => 'PT Budi Steel Nasional',
                'logo' => '45054a752f5b4228a7c1e884c3ac6cdd.png',
                'is_deleted' => false,
            ],
            [
                'name' => 'Olive',
                'legal_name' => 'PT Olive Ayam Goreng',
                'logo' => 'a1fa7438d2ec4bf4aa6e45ae43ea4549.png',
                'is_deleted' => false,
            ],
            [
                'name' => 'Mayora',
                'legal_name' => 'PT Sejahtera Alam Jaya',
                'logo' => 'logo-ultra-jaya.png',
                'is_deleted' => false,
            ],
        ]);

    }
}
