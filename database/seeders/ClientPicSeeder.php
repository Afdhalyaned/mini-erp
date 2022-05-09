<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientPicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client-pic')->insert([
            [
                'name' => 'anton',
                'role' => 'building maintenance',
                'gender' => 1,
                'phone' => '081234564321',
                'email' => 'anton@gmail.com',
                'is_deleted' => false
            ],
        ]);
    }
}
