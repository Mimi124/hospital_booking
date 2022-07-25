<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nurses')->insert([
            'name' => 'Linda Asante',
            'phone' => '0257875963',
            'status' => 'active',
            'image'=> 'https://www.immigration.ca/wp-content/uploads/2022/03/Nurse_66012928-scaled.jpeg'
           
        ]);

        DB::table('nurses')->insert([
            'name' => 'Ben Tutu',
            'phone' => '0206321457',
            'status' => 'active',
            'image'=> 'https://www.waldenu.edu/-/media/walden/images/seo-article/seo-662-bs-healthcare-people-group-profe-294762073-1200x675.jpg?rev=332db21ba2204fcead5a558d2bab91f0&hash=B97575BB15C2BB8093057C34E8EAD1D5'
           
        ]);

        DB::table('nurses')->insert([
            'name' => 'Jennifer Kamara',
            'phone' => '0258966321',
            'status' => 'active',
            'image'=> 'https://image.shutterstock.com/image-photo/front-view-african-american-nurse-260nw-1675317685.jpg'
           
        ]);

        DB::table('nurses')->insert([
            'name' => 'Lucy Camp',
            'phone' => '017896321',
            'status' => 'active',
            'image'=> 'https://www.rasmussen.edu/-/media/images/degrees/nursing/portrait-hero-industry-nursing-s.jpg'
           
        ]);

        DB::table('nurses')->insert([
            'name' => 'Seth Danso',
            'phone' => '0369745122',
            'status' => 'active',
            'image'=> 'https://us.123rf.com/450wm/milkos/milkos2003/milkos200304165/142627310-handsome-black-guy-therapist-in-blue-uniform-making-check-up-holding-medical-chart-over-white-studio.jpg?ver=6'
           
        ]);

        DB::table('nurses')->insert([
            'name' => 'Kingsley Jacobson',
            'phone' => '0247896332',
            'status' => 'active',
            'image'=> 'https://media.istockphoto.com/photos/handsome-african-american-medical-student-picture-id1197000703?k=20&m=1197000703&s=612x612&w=0&h=_RyNiGuCM9BhYn9HMjjJqrFcbB5jw4_5n0B_ZsHki6E='
           
        ]);

        DB::table('nurses')->insert([
            'name' => 'Sandra Owusu',
            'phone' => '0269874123',
            'status' => 'active',
            'image'=> 'https://www.soliant.com/wp-content/uploads/2021/02/7196-iStock-1089509178-2-2.jpg'
           
        ]);
    }
}
