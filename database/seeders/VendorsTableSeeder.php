<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('vendors')->delete();

        \DB::table('vendors')->insert(array (
            0 =>
            array (
                'address' => '台北市蛋黃區',
                'created_at' => '2020-10-21 07:41:29',
                'description' => '汎德永業是專門引入bmw汽車的專業代銷商!',
                'id' => 1,
                'name' => '汎德永業',
                'tel' => '0212345678',
                'updated_at' => '2020-10-21 07:41:29',
                'worktime' => '周一到周六',
            ),
            1 =>
            array (
                'address' => '天龍共和國',
                'created_at' => NULL,
                'description' => '奧迪，專門為你，竟乎苛求!',
                'id' => 2,
                'name' => '奧迪',
                'tel' => '0294879487',
                'updated_at' => NULL,
                'worktime' => '24/7',
            ),
        ));


    }
}
