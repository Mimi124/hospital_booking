<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accountants')->insert([
            'name' => 'Linda Jen',
            'phone' => '0222255555',
            'status' => 'active',
            'image'=> 'https://res.cloudinary.com/highereducation/images/w_2560,h_1011/f_auto,q_auto/c_fill,f_auto,fl_lossy,q_auto:best,w_563,h_375/v1645567615/Accounting.com/GettyImages-1302465690-1/GettyImages-1302465690-1.jpg?_i=AA'
           
        ]);

        DB::table('accountants')->insert([
            'name' => 'Bernard Asante',
            'phone' => '0033221144',
            'status' => 'active',
            'image'=> 'https://cdn.xxl.thumbs.canstockphoto.com/accountant-man-working-in-office-african-american-accountant-business-man-working-in-office-stock-photograph_csp24275293.jpg'
           
        ]);

        DB::table('accountants')->insert([
            'name' => 'Sherry Oduru',
            'phone' => '0247896321',
            'status' => 'active',
            'image'=> 'https://www.irishjobs.ie/careeradvice/wp-content/uploads/Accountancy-and-Finance-Salaries-2022.jpg'
           
        ]);

        DB::table('accountants')->insert([
            'name' => 'Cosmos Ofori',
            'phone' => '020232456',
            'status' => 'active',
            'image'=> 'https://media.istockphoto.com/photos/man-working-at-home-picture-id1354077790?b=1&k=20&m=1354077790&s=170667a&w=0&h=Du48Su-tddPpoRW8oyENY-HDH0di8VNoLdSSTnOiIGI='
           
        ]);

        DB::table('accountants')->insert([
            'name' => 'Christina Asante',
            'phone' => '0369741256',
            'status' => 'active',
            'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkI75JJij9itTVjTk9xoIsayMRblId030GxA&usqp=CAU'
           
        ]);

        DB::table('accountants')->insert([
            'name' => 'Bright Osei',
            'phone' => '0247896321',
            'status' => 'active',
            'image'=> 'https://homebusinessmag.com/wp-content/uploads/2020/10/pexels-tima-miroshnichenko-5198239.jpg'
           
        ]);
    }
}
