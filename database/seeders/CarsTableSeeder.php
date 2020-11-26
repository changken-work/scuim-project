<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('cars')->delete();

        \DB::table('cars')->insert(array (
            0 =>
            array (
                'age' => 10,
                'brand' => '特斯拉',
                'created_at' => '2020-10-21 07:45:04',
                'fake' => 1,
                'id' => 1,
                'image_url' => 'https://tesla-cdn.thron.com/delivery/public/image/tesla/35d15221-0a5f-4dce-b484-a4db67b81dd2/bvlatuR/std/0x0/model-s@2x',
                'model' => 'Model s',
                'name' => '超炫特斯拉Model S跑車',
                'price' => 1000000,
                'updated_at' => '2020-10-21 07:45:04',
                'vendor_id' => 1,
            ),
            1 =>
            array (
                'age' => 1,
                'brand' => '特斯拉',
                'created_at' => '2020-10-21 07:45:04',
                'fake' => 0,
                'id' => 2,
                'image_url' => 'https://tesla-cdn.thron.com/delivery/public/image/tesla/30c2b97f-917a-48ca-bc0a-d58d31932b7c/bvlatuR/std/0x0/charger-1@2_0',
                'model' => 'model x',
                'name' => '超新特斯拉Modelx跑車',
                'price' => 2000000,
                'updated_at' => '2020-10-21 07:45:04',
                'vendor_id' => 1,
            ),
            2 =>
            array (
                'age' => 2,
                'brand' => '特斯拉',
                'created_at' => '2020-10-21 07:45:04',
                'fake' => 0,
                'id' => 3,
                'image_url' => 'https://www.tesla.com/sites/default/files/model3-new/social/model-3-hero-social.jpg',
                'model' => 'model 3',
                'name' => 'model3跑車',
                'price' => 3400000,
                'updated_at' => '2020-10-21 07:45:04',
                'vendor_id' => 1,
            ),
            3 =>
            array (
                'age' => 3,
                'brand' => 'toyota',
                'created_at' => '2020-10-21 07:45:04',
                'fake' => 0,
                'id' => 4,
                'image_url' => 'https://autos.yahoo.com.tw/p/r/w1200/car-trim/December2019/552c13a3cd990a902597466c5a967374.jpeg',
                'model' => 'chr2020',
                'name' => 'toyota chr2020極新車',
                'price' => 780000,
                'updated_at' => '2020-10-21 07:45:04',
                'vendor_id' => 1,
            ),
            4 =>
            array (
                'age' => 3,
                'brand' => 'Honda',
                'created_at' => '2020-10-22 14:08:59',
                'fake' => 0,
                'id' => 5,
                'image_url' => 'https://i.ytimg.com/vi/KFEJHIZN57U/maxresdefault.jpg',
                'model' => 'CRV',
                'name' => 'Honda CRV',
                'price' => 1200000,
                'updated_at' => '2020-10-22 14:08:59',
                'vendor_id' => 1,
            ),
            5 =>
            array (
                'age' => 2,
                'brand' => 'Audi',
                'created_at' => '2020-10-22 15:25:49',
                'fake' => 0,
                'id' => 6,
                'image_url' => 'https://autos.yahoo.com.tw/p/r/w1200/car-trim/July2019/201a4a7fbf45fa8c030314d25363fb39.jpeg',
                'model' => '2020 A7',
                'name' => 'Audi 2020 A7 Sportback 45 TFSI quattro',
                'price' => 1000000,
                'updated_at' => '2020-10-22 15:25:49',
                'vendor_id' => 2,
            ),
            6 =>
            array (
                'age' => 5,
                'brand' => 'Audi',
                'created_at' => '2020-10-22 15:30:10',
                'fake' => 0,
                'id' => 7,
                'image_url' => 'https://www.carstuff.com.tw/media/k2/items/cache/aa3797723f5e2b8711c88edd9debbd43_XL.jpg',
                'model' => 'A3 Sportback',
                'name' => '第四代Audi A3 Sportback',
                'price' => 1200000,
                'updated_at' => '2020-10-22 15:30:10',
                'vendor_id' => 2,
            ),
        ));


    }
}
