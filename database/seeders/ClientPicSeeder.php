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
        DB::table('client_pic')->insert([
            [
                'client_id' => 1,
                'name' => 'anton',
                'role' => 'building maintenance',
                'gender' => 1,
                'phone' => '081234564321',
                'email' => 'anton@gmail.com',
                'is_deleted' => false
            ],
            [
                'client_id' => 1,
                'name' => 'bagus',
                'role' => 'building maintenance',
                'gender' => 1,
                'phone' => '081234564321',
                'email' => 'anton@gmail.com',
                'is_deleted' => false
            ],
            [
                'client_id' => 1,
                'name' => 'eko',
                'role' => 'building maintenance',
                'gender' => 1,
                'phone' => '081234564321',
                'email' => 'anton@gmail.com',
                'is_deleted' => false
            ],
            [
                'client_id' => 1,
                'name' => 'prabowo',
                'role' => 'building maintenance',
                'gender' => 1,
                'phone' => '081234564321',
                'email' => 'anton@gmail.com',
                'is_deleted' => false
            ],
        ]);
    }
}
