<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'created_at' => '2020-10-19 13:25:07',
                'email' => 'pp24513@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'changken',
                'password' => '$2y$10$29T/Hlo0VDjAMwveol5WsuhSCiAjd6YNz3tk5jetBNvDN4gNij2ee',
                'remember_token' => NULL,
                'updated_at' => '2020-10-19 13:25:07',
                'userable_id' => 1,
                'userable_type' => 'admins',
            ),
            1 =>
            array (
                'created_at' => '2020-10-21 07:39:47',
                'email' => 'admin@howhow.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'howhow',
                'password' => '$2y$10$IK4MyOs5S0BPQeX82XEgOeFvfVQUn9Ss3vnBVSZT.v8ZdFqVm28WK',
                'remember_token' => NULL,
                'updated_at' => '2020-10-21 07:39:47',
                'userable_id' => 1,
                'userable_type' => 'factories',
            ),
            2 =>
            array (
                'created_at' => '2020-10-21 07:43:31',
                'email' => 'admin@bmw.com.tw',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'bmw',
                'password' => '$2y$10$IK4MyOs5S0BPQeX82XEgOeFvfVQUn9Ss3vnBVSZT.v8ZdFqVm28WK',
                'remember_token' => NULL,
                'updated_at' => '2020-10-21 07:43:31',
                'userable_id' => 1,
                'userable_type' => 'vendors',
            ),
            3 =>
            array (
                'created_at' => '2020-10-21 08:35:01',
                'email' => 'ken@changken.org',
                'email_verified_at' => NULL,
                'id' => 4,
                'name' => 'ken',
                'password' => '$2y$10$29T/Hlo0VDjAMwveol5WsuhSCiAjd6YNz3tk5jetBNvDN4gNij2ee',
                'remember_token' => NULL,
                'updated_at' => '2020-10-21 08:35:01',
                'userable_id' => 2,
                'userable_type' => 'customers',
            ),
            4 =>
            array (
                'created_at' => '2020-10-22 11:06:35',
                'email' => 'admin@audi.tw',
                'email_verified_at' => NULL,
                'id' => 5,
                'name' => 'audi',
                'password' => '$2y$10$IK4MyOs5S0BPQeX82XEgOeFvfVQUn9Ss3vnBVSZT.v8ZdFqVm28WK',
                'remember_token' => NULL,
                'updated_at' => '2020-10-22 11:06:35',
                'userable_id' => 2,
                'userable_type' => 'vendors',
            ),
            5 =>
            array (
                'created_at' => '2020-10-20 07:07:35',
                'email' => 'scucsim@scu.edu.tw',
                'email_verified_at' => NULL,
                'id' => 6,
                'name' => 'Scucsim',
                'password' => '$2y$10$J2lL76vTPV2VgpE2Cbcfw.kjNQggGprphAX8Olt9A8h65ntRUf2Kq',
                'remember_token' => NULL,
                'updated_at' => '2020-10-20 07:07:35',
                'userable_id' => 3,
                'userable_type' => 'customers',
            ),
            6 =>
            array (
                'created_at' => '2020-10-22 19:11:08',
                'email' => 'admin@scuimproject.com',
                'email_verified_at' => NULL,
                'id' => 7,
                'name' => 'scuimproject',
                'password' => '$2y$10$l1/4fSEunukYepURwg3i3.vMhNMPbjPHg3Ya1IJQ/Ox0NhPy.loKq',
                'remember_token' => NULL,
                'updated_at' => '2020-10-22 19:11:08',
                'userable_id' => 2,
                'userable_type' => 'admins',
            ),
            7 =>
            array (
                'created_at' => '2020-10-23 14:38:04',
                'email' => 'a0972862968@gamil.com',
                'email_verified_at' => NULL,
                'id' => 8,
                'name' => '葉奕廷',
                'password' => '$2y$10$WwOAc.2q7WajfwumPp4B4.ub8b2srdMCaaYJ4QsSZ24O20Yb9aady',
                'remember_token' => NULL,
                'updated_at' => '2020-10-23 14:38:04',
                'userable_id' => 4,
                'userable_type' => 'customers',
            ),
            8 =>
            array (
                'created_at' => '2020-10-27 23:19:32',
                'email' => 'b1578989@gmail.com',
                'email_verified_at' => NULL,
                'id' => 9,
                'name' => 'Piary',
                'password' => '$2y$10$rEjMO16Rn7zt0CSswn.bcurcNDLKxE4us52MEAR9iDV6OFZWVRyW.',
                'remember_token' => NULL,
                'updated_at' => '2020-10-27 23:19:32',
                'userable_id' => 5,
                'userable_type' => 'customers',
            ),
            9 =>
            array (
                'created_at' => '2020-10-27 23:20:20',
                'email' => 'lester19980302@gmail.com',
                'email_verified_at' => NULL,
                'id' => 10,
                'name' => 'lester0302',
                'password' => '$2y$10$e63hwXUFeEg7oZKdIWX.aO0RVHbqVCXDNXiUMPdPsGWSQGn/m67V.',
                'remember_token' => NULL,
                'updated_at' => '2020-10-27 23:20:20',
                'userable_id' => 6,
                'userable_type' => 'customers',
            ),
            10 =>
            array (
                'created_at' => '2020-10-27 23:24:27',
                'email' => '05156134@scu.edu.tw',
                'email_verified_at' => NULL,
                'id' => 18,
                'name' => 'yeh',
                'password' => '$2y$10$EsWVtjewcsPSPjAuvZrCO.3/D4M7OSnV9AzTruj3oY/WVufdtG.Ny',
                'remember_token' => NULL,
                'updated_at' => '2020-10-27 23:24:27',
                'userable_id' => 14,
                'userable_type' => 'customers',
            ),
            11 =>
            array (
                'created_at' => '2020-10-28 00:25:30',
                'email' => 'otto.sys.lag@gamil.com',
                'email_verified_at' => NULL,
                'id' => 19,
                'name' => 'Otto',
                'password' => '$2y$10$S86d7ekf3XblD3GozZSj..nV9Z.y9Kv43aV3k6EpIeXfc6Key11xK',
                'remember_token' => NULL,
                'updated_at' => '2020-10-28 00:25:30',
                'userable_id' => 15,
                'userable_type' => 'customers',
            ),
            12 =>
            array (
                'created_at' => '2020-10-28 09:12:42',
                'email' => 'b157898989@gmail.com',
                'email_verified_at' => NULL,
                'id' => 20,
                'name' => '123',
                'password' => '$2y$10$xg1HAarQzEdDGC5Z7GlQLO1DIQ0i8gm9szapxlyav0eVZPe3QtXyW',
                'remember_token' => NULL,
                'updated_at' => '2020-10-28 09:12:42',
                'userable_id' => 16,
                'userable_type' => 'customers',
            ),
            13 =>
            array (
                'created_at' => '2020-10-31 14:14:33',
                'email' => 'scu@scu.tw',
                'email_verified_at' => NULL,
                'id' => 21,
                'name' => 'scu_factory',
                'password' => '$2y$10$zL8umbutJKDdynt/ahu2h.Y27y9zMbCY/F01HRfp9hCTWBlowQSL6',
                'remember_token' => NULL,
                'updated_at' => '2020-10-31 14:14:33',
                'userable_id' => 2,
                'userable_type' => 'factories',
            ),
            14 =>
            array (
                'created_at' => '2020-10-31 14:17:09',
                'email' => 'ntu@ntu.tw',
                'email_verified_at' => NULL,
                'id' => 22,
                'name' => 'ntu_factory',
                'password' => '$2y$10$zL8umbutJKDdynt/ahu2h.Y27y9zMbCY/F01HRfp9hCTWBlowQSL6',
                'remember_token' => NULL,
                'updated_at' => '2020-10-31 14:17:09',
                'userable_id' => 3,
                'userable_type' => 'factories',
            ),
            15 =>
            array (
                'created_at' => '2020-11-08 13:09:12',
                'email' => 'otto.sys.lab@gmail.com',
                'email_verified_at' => NULL,
                'id' => 23,
                'name' => 'ottochang',
                'password' => '$2y$10$j.XR897Svg/Sl0UYT.LrluUtsXCb9bMFhcvrlns5ans7u8oPEdX0q',
                'remember_token' => NULL,
                'updated_at' => '2020-11-08 13:09:12',
                'userable_id' => 17,
                'userable_type' => 'customers',
            ),
        ));


    }
}
