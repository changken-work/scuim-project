<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admins')->delete();

        \DB::table('admins')->insert(array (
            0 =>
            array (
                'created_at' => '2020-10-21 07:41:12',
                'id' => 1,
                'updated_at' => '2020-10-21 07:41:12',
            ),
            1 =>
            array (
                'created_at' => '2020-10-22 19:10:55',
                'id' => 2,
                'updated_at' => '2020-10-22 19:10:55',
            ),
        ));


    }
}
