<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '0278963214',
            'address'=> '123 Main Street',
            'usertype'=> '1',
            'email_verified_at'=>'2022-03-08 11:35:10',
            'password' => '$2y$10$wSoyqSUQZGC8MeEcbqu2gugCgGTOuJz5AiKCphM6W2rK8swfb2/ky',
            'created_at'=> '2022-03-08 11:24:56',
            'updated_at'=> '2022-03-08 11:24:56'

        ]);
    }
}
