<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'SATATYA NVR25608XCTS',
            'sku_code' => 'matrix-nvr-256-08',
            'category_id' => 1,
            'description' => '32 Channel Enterprise Range Server Grade NVR with 4K Support and 8HDD Slots 
            • 32 IP Channel Inputs; Display: 1 x VGA and 4 x Display Port
            • Dual Input Hot Swap Redundant (1+1) Power Supply 
            • 8 Hot Swap 3.5"/2.5" SATA HDD/SSD Drive Bay (18TB Capacity, Hard Disk Not Included) 
            • 1 GbE & 10 GbE Lan Port; 512 Mbps Uplink & 512 Mbps Downlink 
            • SFP card, 4GB Nvidia Graphic card, Hardware Raid support 0/1/5/6/10 ',
            'is_deleted' => false
        ]);
    }
}
