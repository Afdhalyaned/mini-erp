<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price_selling')->insert([
            [
                'product_id' => 1,
                'margin_category' => 'percent',
                'margin_value' => '10',
                'selling_price' => 11000000,
            ],
        ]);
    }
}
