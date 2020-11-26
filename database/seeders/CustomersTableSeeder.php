<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('customers')->delete();

        \DB::table('customers')->insert(array (
            0 =>
            array (
                'created_at' => '2020-10-19 13:25:07',
                'fullname' => '張登凱',
                'id' => 1,
                'phone' => '0905777065',
                'updated_at' => '2020-10-19 13:25:07',
            ),
            1 =>
            array (
                'created_at' => '2020-10-21 08:35:01',
                'fullname' => '凱凱',
                'id' => 2,
                'phone' => '0912345678',
                'updated_at' => '2020-10-21 08:35:01',
            ),
            2 =>
            array (
                'created_at' => '2020-10-20 07:07:32',
                'fullname' => 'Scucsim',
                'id' => 3,
                'phone' => '0912345678',
                'updated_at' => '2020-10-20 07:07:32',
            ),
            3 =>
            array (
                'created_at' => '2020-10-23 14:38:02',
                'fullname' => '葉奕廷',
                'id' => 4,
                'phone' => '0972862968',
                'updated_at' => '2020-10-23 14:38:02',
            ),
            4 =>
            array (
                'created_at' => '2020-10-27 23:19:30',
                'fullname' => '楊秉瑞',
                'id' => 5,
                'phone' => '0978375938',
                'updated_at' => '2020-10-27 23:19:30',
            ),
            5 =>
            array (
                'created_at' => '2020-10-27 23:20:18',
                'fullname' => '賴重羽',
                'id' => 6,
                'phone' => '0988236233',
                'updated_at' => '2020-10-27 23:20:18',
            ),
            6 =>
            array (
                'created_at' => '2020-10-27 23:21:32',
                'fullname' => 'Scucsim',
                'id' => 7,
                'phone' => '0912345678',
                'updated_at' => '2020-10-27 23:21:32',
            ),
            7 =>
            array (
                'created_at' => '2020-10-27 23:21:49',
                'fullname' => 'Scucsim',
                'id' => 8,
                'phone' => '0912345678',
                'updated_at' => '2020-10-27 23:21:49',
            ),
            8 =>
            array (
                'created_at' => '2020-10-27 23:22:04',
                'fullname' => '葉奕廷',
                'id' => 9,
                'phone' => '0972862968',
                'updated_at' => '2020-10-27 23:22:04',
            ),
            9 =>
            array (
                'created_at' => '2020-10-27 23:22:14',
                'fullname' => '葉奕廷',
                'id' => 10,
                'phone' => '0972862968',
                'updated_at' => '2020-10-27 23:22:14',
            ),
            10 =>
            array (
                'created_at' => '2020-10-27 23:22:29',
                'fullname' => '葉奕廷',
                'id' => 11,
                'phone' => '0972862968',
                'updated_at' => '2020-10-27 23:22:29',
            ),
            11 =>
            array (
                'created_at' => '2020-10-27 23:22:45',
                'fullname' => 'AlexLin',
                'id' => 12,
                'phone' => '0912345678',
                'updated_at' => '2020-10-27 23:22:45',
            ),
            12 =>
            array (
                'created_at' => '2020-10-27 23:22:46',
                'fullname' => '葉奕廷',
                'id' => 13,
                'phone' => '0972862968',
                'updated_at' => '2020-10-27 23:22:46',
            ),
            13 =>
            array (
                'created_at' => '2020-10-27 23:24:24',
                'fullname' => '葉奕廷',
                'id' => 14,
                'phone' => '0972862968',
                'updated_at' => '2020-10-27 23:24:24',
            ),
            14 =>
            array (
                'created_at' => '2020-10-28 00:25:28',
                'fullname' => 'ottochang',
                'id' => 15,
                'phone' => '0910361461',
                'updated_at' => '2020-10-28 00:25:28',
            ),
            15 =>
            array (
                'created_at' => '2020-10-28 09:12:40',
                'fullname' => '楊秉叡',
                'id' => 16,
                'phone' => '0978375938',
                'updated_at' => '2020-10-28 09:12:40',
            ),
            16 =>
            array (
                'created_at' => '2020-11-08 13:09:10',
                'fullname' => 'Otto Chang',
                'id' => 17,
                'phone' => '0910361462',
                'updated_at' => '2020-11-08 13:09:10',
            ),
        ));


    }
}
