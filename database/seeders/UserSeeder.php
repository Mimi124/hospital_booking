<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
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

        DB::table('users')->insert([
            'name' => 'Accountant',
            'email' => 'accountant@gmail.com',
            'phone' => '0278963216',
            'address'=> '100 Main Street',
            'usertype'=> '2',
            'email_verified_at'=>'2022-03-08 11:35:10',
            'password' => '$2a$12$oqa6/pfNgP3IxkrRmx37v.vv44N3biIibl.1KwCCaatOdD.p5qH.m',
            'created_at'=> '2022-03-08 11:24:56',
            'updated_at'=> '2022-03-08 11:24:56'

        ]);

        DB::table('users')->insert([
            'name' => 'Laboratorist',
            'email' => 'laboratorist@gmail.com',
            'phone' => '0278963900',
            'address'=> '108 Main Street',
            'usertype'=> '3',
            'email_verified_at'=>'2022-03-08 11:35:10',
            'password' => '$2a$12$oqa6/pfNgP3IxkrRmx37v.vv44N3biIibl.1KwCCaatOdD.p5qH.m',
            'created_at'=> '2022-03-08 11:24:56',
            'updated_at'=> '2022-03-08 11:24:56'

        ]);

        DB::table('users')->insert([
            'name' => 'Pharmacist',
            'email' => 'pharmacist@gmail.com',
            'phone' => '0278963222',
            'address'=> '130 Main Street',
            'usertype'=> '4',
            'email_verified_at'=>'2022-03-08 11:35:10',
            'password' => '$2a$12$oqa6/pfNgP3IxkrRmx37v.vv44N3biIibl.1KwCCaatOdD.p5qH.m',
            'created_at'=> '2022-03-08 11:24:56',
            'updated_at'=> '2022-03-08 11:24:56'

        ]);

        DB::table('users')->insert([
            'name' => 'Receptionist',
            'email' => 'receptionist@gmail.com',
            'phone' => '0278963211',
            'address'=> '145 Main Street',
            'usertype'=> '5',
            'email_verified_at'=>'2022-03-08 11:35:10',
            'password' => '$2a$12$oqa6/pfNgP3IxkrRmx37v.vv44N3biIibl.1KwCCaatOdD.p5qH.m',
            'created_at'=> '2022-03-08 11:24:56',
            'updated_at'=> '2022-03-08 11:24:56'

        ]);

        DB::table('users')->insert([
            'name' => 'Doctor',
            'email' => 'doctor@gmail.com',
            'phone' => '02547896512',
            'address'=> '145 Ave Street',
            'usertype'=> '6',
            'email_verified_at'=>'2022-03-08 11:35:10',
            'password' => '$2a$12$oqa6/pfNgP3IxkrRmx37v.vv44N3biIibl.1KwCCaatOdD.p5qH.m',
            'created_at'=> '2022-03-08 11:24:56',
            'updated_at'=> '2022-03-08 11:24:56'

        ]);

        DB::table('users')->insert([
            'name' => 'Nurse',
            'email' => 'nurse@gmail.com',
            'phone' => '02022222254',
            'address'=> '120 Manu Street',
            'usertype'=> '7',
            'email_verified_at'=>'2022-03-08 11:35:10',
            'password' => '$2a$12$oqa6/pfNgP3IxkrRmx37v.vv44N3biIibl.1KwCCaatOdD.p5qH.m',
            'created_at'=> '2022-03-08 11:24:56',
            'updated_at'=> '2022-03-08 11:24:56'

        ]);
    }
}
