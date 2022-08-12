<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('laboratories')->insert([
            'name' => 'Cynthia Karl',
            'phone' => '0224457896',
            'status' => 'active',
            'image'=> 'https://careers.questdiagnostics.com/media/2019/4/f8354667-e2f0-4181-b7ec-b7476e57a007-1554484745506.png'
           
        ]);

        DB::table('laboratories')->insert([
            'name' => 'Bernard Osei',
            'phone' => '02417896321',
            'status' => 'active',
            'image'=> 'https://i1.wp.com/cpsmja.com/wp-content/uploads/2019/11/histology-technician-career-3383580-0088-hero-tablet.jpg?fit=1024%2C512&ssl=1'
           
        ]);

        DB::table('laboratories')->insert([
            'name' => 'Shelly Nelson',
            'phone' => '0268941235',
            'status' => 'active',
            'image'=> 'https://images.fineartamerica.com/images-medium-large-5/lab-assistant-using-a-centrifuge-wladimir-bulgar.jpg'
           
        ]);

        DB::table('laboratories')->insert([
            'name' => 'Jason Dankwa',
            'phone' => '0236987412',
            'status' => 'active',
            'image'=> 'https://image.shutterstock.com/image-photo/young-scientist-microscope-laboratory-chemical-600w-1265767276.jpg'
           
        ]);

        DB::table('laboratories')->insert([
            'name' => 'Nancy Asante',
            'phone' => '0269874512',
            'status' => 'active',
            'image'=> 'https://www.amprogress.org/wp-content/uploads/2016/06/woman-dark-hair-lab--2000x1404.jpg'
           
        ]);

        DB::table('laboratories')->insert([
            'name' => 'Leonard Castro',
            'phone' => '0245962123',
            'status' => 'active',
            'image'=> 'https://image.shutterstock.com/image-photo/male-biochemist-working-lab-on-600w-1124597792.jpg'
           
        ]);
    }
}
