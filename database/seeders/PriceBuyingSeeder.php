<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceBuyingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price_buying')->insert([
            [
                'product_id' => 1,
                'updated_date' => '2022-05-03',
                'price' => 10000000,
                'supplier' => 'PT Sinar Harapan Jaya'
            ],
            [
                'product_id' => 2,
                'updated_date' => '2022-05-03',
                'price' => 9000000,
                'supplier' => 'PT Sinar Harapan Jaya'
            ],
            [
                'product_id' => 3,
                'updated_date' => '2022-05-03',
                'price' => 8000000,
                'supplier' => 'PT Sinar Harapan Jaya'
            ],
            [
                'product_id' => 4,
                'updated_date' => '2022-05-03',
                'price' => 7000000,
                'supplier' => 'PT Sinar Harapan Jaya'
            ],
            [
                'product_id' => 5,
                'updated_date' => '2022-05-03',
                'price' => 6000000,
                'supplier' => 'PT Sinar Harapan Jaya'
            ],
            [
                'product_id' => 6,
                'updated_date' => '2022-05-03',
                'price' => 5000000,
                'supplier' => 'PT Sinar Harapan Jaya'
            ],
        ]);
    }
}
