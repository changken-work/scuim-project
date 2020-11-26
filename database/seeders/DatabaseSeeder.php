<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(VendorsTableSeeder::class);
        $this->call(FactoriesTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(RepairLogsTableSeeder::class);
        $this->call(ViewLogsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
    }
}
