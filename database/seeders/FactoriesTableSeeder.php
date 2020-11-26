<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FactoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('factories')->delete();

        \DB::table('factories')->insert(array (
            0 =>
            array (
                'address' => '台北市蛋白區',
                'created_at' => '2020-10-21 07:41:00',
                'description' => '好好車廠專營汽車維修!讓客戶修得安心!賓至如歸!',
                'id' => 1,
                'name' => '好好車廠',
                'tel' => '0294879487',
                'updated_at' => '2020-10-21 07:41:00',
                'worktime' => '周一到周六',
            ),
            1 =>
            array (
                'address' => '台北市士林區',
                'created_at' => '2020-10-31 14:13:23',
                'description' => '城中車廠為優質車廠業者，專門維修高價車!!',
                'id' => 2,
                'name' => '城中車廠',
                'tel' => '0212345678',
                'updated_at' => '2020-10-31 14:13:30',
                'worktime' => '24/7',
            ),
            2 =>
            array (
                'address' => '台北市羅斯福路',
                'created_at' => '2020-10-31 14:18:24',
                'description' => '台大車廠利用最新最夯的IA工人技術來實現維修汽車!',
                'id' => 3,
                'name' => '台大車廠',
                'tel' => '0212345678',
                'updated_at' => '2020-10-31 14:18:24',
                'worktime' => '24小時輪班',
            ),
        ));


    }
}
