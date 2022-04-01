<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('doctors')->insert([
            'name' => 'Dr Asante',
            'phone' => '0257896323',
            'speciality' => 'Eye Treatment',
            'room'=> '101',
            'image'=> 'https://d.newsweek.com/en/full/1746160/new-amsterdam-jocko-sims-reynolds.jpg?w=1600&h=1600&q=88&f=8a8dd2b80b0e1bc3b31a2b513bc712f4'
           

        ]);
        DB::table('doctors')->insert([
            'name' => 'Dr Comfort',
            'phone' => '0247896321',
            'speciality' => 'Ear Treatment',
            'room'=> '122',
            'image'=> 'https://i.pinimg.com/564x/b2/06/88/b20688460125ce97546b197b58b302c1.jpg'
           

        ]);
        DB::table('doctors')->insert([
            'name' => 'Dr Sam',
            'phone' => '0214789632',
            'speciality' => 'Surgeon',
            'room'=> '412',
            'image'=> 'https://es.web.img3.acsta.net/pictures/18/08/28/15/32/2610945.jpg'
            

        ]);
        DB::table('doctors')->insert([
            'name' => 'Dr Murphy',
            'phone' => '0298321478',
            'speciality' => 'Psychiatric',
            'room'=> '222',
            'image'=> 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/the-good-doctor-season-2-1553253498.jpg'
            

        ]);
        DB::table('doctors')->insert([
            'name' => 'Dr Linda',
            'phone' => '0279632145',
            'speciality' => 'Physiotherapist',
            'room'=> '103',
            'image'=> 'https://tv-fanatic-res.cloudinary.com/iu/s--u6OKT9eq--/f_auto,q_auto/v1551713049/claire-defends-shaun-the-good-doctor-s2e17'
          

        ]);
      
    }
}
