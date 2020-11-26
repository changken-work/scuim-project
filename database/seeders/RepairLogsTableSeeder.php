<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RepairLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('repair_logs')->delete();

        \DB::table('repair_logs')->insert(array (
            0 =>
            array (
                'avg_rpm' => 6500,
                'car_id' => 1,
                'created_at' => '2020-10-25 14:41:12',
                'current_hash' => 'QSHi4FtrHE6BkC2kPdJQ1ryG8ebSULRB',
                'factory_id' => 1,
                'mileages' => 100,
                'prev_hash' => 'v81WFzmTAR50cpmlIp8oZLjbXgT00E8q',
                'updated_at' => '2020-10-25 14:41:12',
            ),
            1 =>
            array (
                'avg_rpm' => 4000,
                'car_id' => 1,
                'created_at' => '2020-10-22 14:40:26',
                'current_hash' => 'v81WFzmTAR50cpmlIp8oZLjbXgT00E8q',
                'factory_id' => 1,
                'mileages' => 50,
                'prev_hash' => 'uUO2Xp0JIflY7HDKG4GDkMfhmZ51m0Vw',
                'updated_at' => '2020-10-22 14:40:26',
            ),
            2 =>
            array (
                'avg_rpm' => 3620,
                'car_id' => 2,
                'created_at' => '2020-10-10 19:19:07',
                'current_hash' => 'I9DTZc3EyWzecMK8iP3X4ogxbdhhNw39',
                'factory_id' => 1,
                'mileages' => 55,
                'prev_hash' => 'xY1i7eJJVjcOUeawy5X4lfpfG6HV3ors',
                'updated_at' => '2020-10-10 19:19:07',
            ),
            3 =>
            array (
                'avg_rpm' => 4500,
                'car_id' => 2,
                'created_at' => '2020-10-08 19:18:00',
                'current_hash' => 'xY1i7eJJVjcOUeawy5X4lfpfG6HV3ors',
                'factory_id' => 1,
                'mileages' => 35,
                'prev_hash' => '747EYrB975kr61JKmhd4bMkpDBl2NM00',
                'updated_at' => '2020-10-08 19:18:00',
            ),
            4 =>
            array (
                'avg_rpm' => 7417,
                'car_id' => 3,
                'created_at' => '2020-10-10 19:31:15',
                'current_hash' => 'ICL1r6899b8yTlUYrMhCwar8ugkyUh92',
                'factory_id' => 1,
                'mileages' => 22,
                'prev_hash' => 'KDtbHwZR7loFu5IGtxojV5MoRKGVcCOz',
                'updated_at' => '2020-10-10 19:31:15',
            ),
            5 =>
            array (
                'avg_rpm' => 2427,
                'car_id' => 3,
                'created_at' => '2020-10-01 19:29:13',
                'current_hash' => 'loKeyJtyLTpGj8RLEOY7ayTgpem62nTW',
                'factory_id' => 1,
                'mileages' => 1,
                'prev_hash' => '5cdyTv7Qn1u2SlhrH8FBIRitKP8t2zJU',
                'updated_at' => '2020-10-01 19:29:13',
            ),
            6 =>
            array (
                'avg_rpm' => 5548,
                'car_id' => 4,
                'created_at' => '2020-09-30 19:34:39',
                'current_hash' => 'gVrWx607Cx5fYeIozNuRYQYTp2ZHrhL7',
                'factory_id' => 1,
                'mileages' => 12,
                'prev_hash' => 'GU99bXp2XVfMAg2pSWpbXtJArqQw9s3H',
                'updated_at' => '2020-09-30 19:34:39',
            ),
            7 =>
            array (
                'avg_rpm' => 8481,
                'car_id' => 5,
                'created_at' => '2020-08-05 19:38:25',
                'current_hash' => 'a6GKyLBPjcNhuAafcDVroXjoxBgocMVL',
                'factory_id' => 1,
                'mileages' => 5,
                'prev_hash' => 'aaDxitEJbjARZdsXCXHAVRknbIIXfl8C',
                'updated_at' => '2020-08-05 19:38:25',
            ),
            8 =>
            array (
                'avg_rpm' => 3448,
                'car_id' => 5,
                'created_at' => '2020-08-13 19:38:56',
                'current_hash' => 'GbLUWNfTrg1nqTEqLjW5al91yElbfkGt',
                'factory_id' => 1,
                'mileages' => 10,
                'prev_hash' => 'a6GKyLBPjcNhuAafcDVroXjoxBgocMVL',
                'updated_at' => '2020-08-13 19:38:56',
            ),
            9 =>
            array (
                'avg_rpm' => 4517,
                'car_id' => 5,
                'created_at' => '2020-10-31 19:41:23',
                'current_hash' => 'Gf0GxkN2vXiZ1Wn7C2Kgz39vbEwTAh4G',
                'factory_id' => 1,
                'mileages' => 58,
                'prev_hash' => 'CBVvwM9fMbTRnM0SnMHKRGsjZ4E5SKAe',
                'updated_at' => '2020-10-31 19:41:23',
            ),
            10 =>
            array (
                'avg_rpm' => 4500,
                'car_id' => 6,
                'created_at' => '2020-07-10 15:34:42',
                'current_hash' => '30pSh3Orfw9UZcx4lqCVLpiBw2TUipt2',
                'factory_id' => 1,
                'mileages' => 15,
                'prev_hash' => 'YpHZeP8skfzYn4EwVx2E0dDq3xF3K9zI',
                'updated_at' => '2020-07-10 15:34:42',
            ),
            11 =>
            array (
                'avg_rpm' => 5474,
                'car_id' => 6,
                'created_at' => '2020-08-05 19:45:27',
                'current_hash' => 'lybsk8uqUD5PCc4S62jlhItKU2JQ5AN1',
                'factory_id' => 1,
                'mileages' => 30,
                'prev_hash' => '30pSh3Orfw9UZcx4lqCVLpiBw2TUipt2',
                'updated_at' => '2020-08-05 19:45:27',
            ),
            12 =>
            array (
                'avg_rpm' => 4811,
                'car_id' => 6,
                'created_at' => '2020-09-03 19:46:09',
                'current_hash' => 'WS7mWt6T3RnLbSKc8GmQMw1ID9afNUOC',
                'factory_id' => 1,
                'mileages' => 50,
                'prev_hash' => 'lybsk8uqUD5PCc4S62jlhItKU2JQ5AN1',
                'updated_at' => '2020-09-03 19:46:09',
            ),
            13 =>
            array (
                'avg_rpm' => 3400,
                'car_id' => 6,
                'created_at' => '2020-07-01 15:34:17',
                'current_hash' => 'YpHZeP8skfzYn4EwVx2E0dDq3xF3K9zI',
                'factory_id' => 1,
                'mileages' => 1,
                'prev_hash' => 'D8oD6G7FdEtaloVLZg7OwtEl6xppUZHJ',
                'updated_at' => '2020-07-01 15:34:17',
            ),
            14 =>
            array (
                'avg_rpm' => 3487,
                'car_id' => 7,
                'created_at' => '2020-09-01 19:54:18',
                'current_hash' => '7LFCc70hDqpNBGAZS1oEW7qgxY5OmMvq',
                'factory_id' => 1,
                'mileages' => 68,
                'prev_hash' => 'sL8AC0zN7zkwAHkJ78iTy1EN3Xv4MNG7',
                'updated_at' => '2020-09-01 19:54:18',
            ),
            15 =>
            array (
                'avg_rpm' => 6784,
                'car_id' => 7,
                'created_at' => '2020-09-10 19:54:43',
                'current_hash' => 'D0ICwTbY6TdfURpcR291sNIiKNG86bws',
                'factory_id' => 1,
                'mileages' => 94,
                'prev_hash' => '7LFCc70hDqpNBGAZS1oEW7qgxY5OmMvq',
                'updated_at' => '2020-09-10 19:54:43',
            ),
            16 =>
            array (
                'avg_rpm' => 4817,
                'car_id' => 7,
                'created_at' => '2020-08-20 19:53:44',
                'current_hash' => 'sL8AC0zN7zkwAHkJ78iTy1EN3Xv4MNG7',
                'factory_id' => 1,
                'mileages' => 50,
                'prev_hash' => 'Fh2b0f4xLvTjL1PjPyMVYBYe7VILyOkO',
                'updated_at' => '2020-08-20 19:53:44',
            ),
            17 =>
            array (
                'avg_rpm' => 3000,
                'car_id' => 1,
                'created_at' => '2020-10-31 15:17:55',
                'current_hash' => '5HPWO1A6UjC2IyZHrILGRHQrNoeVvMhy',
                'factory_id' => 2,
                'mileages' => 156,
                'prev_hash' => 'QiLDBZ1wb8BJgNZE47q76D2eJERKjQpe',
                'updated_at' => '2020-10-31 15:17:55',
            ),
            18 =>
            array (
                'avg_rpm' => 3000,
                'car_id' => 1,
                'created_at' => '2020-10-19 14:31:23',
                'current_hash' => 'uUO2Xp0JIflY7HDKG4GDkMfhmZ51m0Vw',
                'factory_id' => 2,
                'mileages' => 12,
                'prev_hash' => '8BlsonBFryVQkboL69dKdiuOFNOpU6AQ',
                'updated_at' => '2020-10-19 14:31:23',
            ),
            19 =>
            array (
                'avg_rpm' => 5481,
                'car_id' => 2,
                'created_at' => '2020-10-20 19:22:34',
                'current_hash' => 'iusaB2HGiB3LbnuFpAu3ZfAbslp1VlVz',
                'factory_id' => 2,
                'mileages' => 150,
                'prev_hash' => 'S2xfP6dv7H0x8TOUtvtmPdHdUsEYwTcC',
                'updated_at' => '2020-10-20 19:22:34',
            ),
            20 =>
            array (
                'avg_rpm' => 3000,
                'car_id' => 2,
                'created_at' => '2020-10-01 15:29:06',
                'current_hash' => 'UI7L83te6lOupCL9uMR66mi2lNhO5Qqc',
                'factory_id' => 2,
                'mileages' => 5,
                'prev_hash' => 'Yl43Gm5AmDs6NkEdfYqwV32rWIufYBoL',
                'updated_at' => '2020-10-01 15:29:06',
            ),
            21 =>
            array (
                'avg_rpm' => 8484,
                'car_id' => 3,
                'created_at' => '2020-10-12 19:31:40',
                'current_hash' => 'k6TSJFFPU8Sat5q7pUmls1JC58BDpPBo',
                'factory_id' => 2,
                'mileages' => 50,
                'prev_hash' => 'ICL1r6899b8yTlUYrMhCwar8ugkyUh92',
                'updated_at' => '2020-10-12 19:31:40',
            ),
            22 =>
            array (
                'avg_rpm' => 4844,
                'car_id' => 3,
                'created_at' => '2020-10-07 19:30:25',
                'current_hash' => 'KDtbHwZR7loFu5IGtxojV5MoRKGVcCOz',
                'factory_id' => 2,
                'mileages' => 10,
                'prev_hash' => 'loKeyJtyLTpGj8RLEOY7ayTgpem62nTW',
                'updated_at' => '2020-10-07 19:30:25',
            ),
            23 =>
            array (
                'avg_rpm' => 9484,
                'car_id' => 4,
                'created_at' => '2020-10-07 19:35:09',
                'current_hash' => 'GjFABzORFRtOE8nqrZepJ41MFpphbZom',
                'factory_id' => 2,
                'mileages' => 25,
                'prev_hash' => 'gVrWx607Cx5fYeIozNuRYQYTp2ZHrhL7',
                'updated_at' => '2020-10-07 19:35:09',
            ),
            24 =>
            array (
                'avg_rpm' => 3000,
                'car_id' => 4,
                'created_at' => '2020-09-23 16:09:13',
                'current_hash' => 'GU99bXp2XVfMAg2pSWpbXtJArqQw9s3H',
                'factory_id' => 2,
                'mileages' => 1,
                'prev_hash' => 'jgk8Z8jSnpkMmtpPqfycNCBYkx3k0J3L',
                'updated_at' => '2020-09-23 16:09:13',
            ),
            25 =>
            array (
                'avg_rpm' => 1818,
                'car_id' => 4,
                'created_at' => '2020-10-17 19:35:37',
                'current_hash' => 'PvMQqVyWFMUlNardVl0vUDieMOPu8yJr',
                'factory_id' => 2,
                'mileages' => 38,
                'prev_hash' => 'GjFABzORFRtOE8nqrZepJ41MFpphbZom',
                'updated_at' => '2020-10-17 19:35:37',
            ),
            26 =>
            array (
                'avg_rpm' => 5417,
                'car_id' => 5,
                'created_at' => '2020-09-09 19:40:59',
                'current_hash' => 'CBVvwM9fMbTRnM0SnMHKRGsjZ4E5SKAe',
                'factory_id' => 2,
                'mileages' => 36,
                'prev_hash' => 'g8txLjsD1izGdsYRs3gDBWZL2pLABp5r',
                'updated_at' => '2020-09-09 19:40:59',
            ),
            27 =>
            array (
                'avg_rpm' => 8417,
                'car_id' => 6,
                'created_at' => '2020-10-31 19:50:47',
                'current_hash' => 'iIjdKzOhqzlIrgjCJ6tFjYlihCcc0NRm',
                'factory_id' => 2,
                'mileages' => 100,
                'prev_hash' => 'OQJulwhYAGcGn56LbAofVVo9YO4j9ddB',
                'updated_at' => '2020-10-31 19:50:47',
            ),
            28 =>
            array (
                'avg_rpm' => 5000,
                'car_id' => 7,
                'created_at' => '2020-08-01 16:11:05',
                'current_hash' => 'h64nVi6lLNbIomB2lL0SBpOI6tA5RmBW',
                'factory_id' => 2,
                'mileages' => 10,
                'prev_hash' => 'PpyquTQAYOHh9mJcMbh4hPBOKpoY4Enw',
                'updated_at' => '2020-08-01 16:11:05',
            ),
            29 =>
            array (
                'avg_rpm' => 4751,
                'car_id' => 7,
                'created_at' => '2020-08-06 19:52:16',
                'current_hash' => 'W1oLpu7fkCPS6ewRz8ZJMKV5D4VqfVCz',
                'factory_id' => 2,
                'mileages' => 22,
                'prev_hash' => 'h64nVi6lLNbIomB2lL0SBpOI6tA5RmBW',
                'updated_at' => '2020-08-06 19:52:16',
            ),
            30 =>
            array (
                'avg_rpm' => 4600,
                'car_id' => 1,
                'created_at' => '2020-10-28 14:34:43',
                'current_hash' => 'QiLDBZ1wb8BJgNZE47q76D2eJERKjQpe',
                'factory_id' => 3,
                'mileages' => 150,
                'prev_hash' => 'QSHi4FtrHE6BkC2kPdJQ1ryG8ebSULRB',
                'updated_at' => '2020-10-28 14:34:43',
            ),
            31 =>
            array (
                'avg_rpm' => 5600,
                'car_id' => 2,
                'created_at' => '2020-10-05 19:13:13',
                'current_hash' => '747EYrB975kr61JKmhd4bMkpDBl2NM00',
                'factory_id' => 3,
                'mileages' => 20,
                'prev_hash' => 'UI7L83te6lOupCL9uMR66mi2lNhO5Qqc',
                'updated_at' => '2020-10-05 19:13:13',
            ),
            32 =>
            array (
                'avg_rpm' => 4515,
                'car_id' => 2,
                'created_at' => '2020-10-13 19:20:40',
                'current_hash' => 'S2xfP6dv7H0x8TOUtvtmPdHdUsEYwTcC',
                'factory_id' => 3,
                'mileages' => 80,
                'prev_hash' => 'I9DTZc3EyWzecMK8iP3X4ogxbdhhNw39',
                'updated_at' => '2020-10-13 19:20:40',
            ),
            33 =>
            array (
                'avg_rpm' => 7414,
                'car_id' => 3,
                'created_at' => '2020-10-31 19:32:30',
                'current_hash' => '7CVmjbgstIXwxBnlKPP2iK612jIYw3NV',
                'factory_id' => 3,
                'mileages' => 56,
                'prev_hash' => 'k6TSJFFPU8Sat5q7pUmls1JC58BDpPBo',
                'updated_at' => '2020-10-31 19:32:30',
            ),
            34 =>
            array (
                'avg_rpm' => 3457,
                'car_id' => 4,
                'created_at' => '2020-10-31 19:36:27',
                'current_hash' => 'FYmOn4k9HJUZrKpXxuswogrVM4ecmqsA',
                'factory_id' => 3,
                'mileages' => 57,
                'prev_hash' => 'PvMQqVyWFMUlNardVl0vUDieMOPu8yJr',
                'updated_at' => '2020-10-31 19:36:27',
            ),
            35 =>
            array (
                'avg_rpm' => 4510,
                'car_id' => 5,
                'created_at' => '2020-08-20 19:39:40',
                'current_hash' => 'g8txLjsD1izGdsYRs3gDBWZL2pLABp5r',
                'factory_id' => 3,
                'mileages' => 15,
                'prev_hash' => 'GbLUWNfTrg1nqTEqLjW5al91yElbfkGt',
                'updated_at' => '2020-08-20 19:39:40',
            ),
            36 =>
            array (
                'avg_rpm' => 7487,
                'car_id' => 6,
                'created_at' => '2020-09-16 19:48:54',
                'current_hash' => 'OQJulwhYAGcGn56LbAofVVo9YO4j9ddB',
                'factory_id' => 3,
                'mileages' => 67,
                'prev_hash' => 'WS7mWt6T3RnLbSKc8GmQMw1ID9afNUOC',
                'updated_at' => '2020-09-16 19:48:54',
            ),
            37 =>
            array (
                'avg_rpm' => 4158,
                'car_id' => 7,
                'created_at' => '2020-08-12 19:52:55',
                'current_hash' => 'Fh2b0f4xLvTjL1PjPyMVYBYe7VILyOkO',
                'factory_id' => 3,
                'mileages' => 36,
                'prev_hash' => 'W1oLpu7fkCPS6ewRz8ZJMKV5D4VqfVCz',
                'updated_at' => '2020-08-12 19:52:55',
            ),
            38 =>
            array (
                'avg_rpm' => 3451,
                'car_id' => 7,
                'created_at' => '2020-10-02 19:55:26',
                'current_hash' => 'Rp4bCBnLpHVAJn6EPJnLyVgMBNpnzxyD',
                'factory_id' => 3,
                'mileages' => 154,
                'prev_hash' => 'D0ICwTbY6TdfURpcR291sNIiKNG86bws',
                'updated_at' => '2020-10-02 19:55:26',
            ),
        ));


    }
}
