<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_address')->insert([
            [
                'client_id' => 1,
                'name' => 'Head Office',
                'detail' => 'Jalan Cempaka',
                'province' => 'DKI Jakarta',
                'distric' => 'Jakarta Pusat',
                'urban_village' => 'Gambir',
                'village' => 'Batu Tulis',
                'is_deleted' => false
            ],
            [
                'client_id' => 1,
                'name' => 'Site 1',
                'detail' => 'Jalan sudirman',
                'province' => 'DKI Jakarta',
                'distric' => 'Jakarta Pusat',
                'urban_village' => 'Gambir',
                'village' => 'Batu Tulis',
                'id_deleted' => false
            ],
            [
                'client_id' => 1,
                'name' => 'Site 2',
                'detail' => 'Jalan Bekasi',
                'province' => 'DKI Jakarta',
                'distric' => 'Jakarta Pusat',
                'urban_village' => 'Gambir',
                'village' => 'Batu Tulis',
                'id_deleted' => false
            ],
            [
                'client_id' => 1,
                'name' => 'Site 3',
                'detail' => 'Jalan Cipayung',
                'province' => 'DKI Jakarta',
                'distric' => 'Jakarta Pusat',
                'urban_village' => 'Gambir',
                'village' => 'Batu Tulis',
                'id_deleted' => false
            ],
        ]);
    }
}
