<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin3',
            'email' => 'superadmin3@gmail.com',
            'role' => 'superadmin',
            'password' => '$2y$10$bP3Ho7oALJwCo31mOId/TuM.wgSRBTa.RXjZWooqsW2Qv7coxrr/a',
            'created_at' => '2022-10-02 09:01:05',
            'updated_at' => '2022-10-02 09:01:05'
        ]);
    }
}
