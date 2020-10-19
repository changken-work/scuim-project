<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootEloquentMorphs();
    }

    /**
     * 自定義多態關聯的類型
     */
    private function bootEloquentMorphs()
    {
        Relation::morphMap([
            Model::getActualClassNameForMorph(Admin::class) => Admin::class,
            Model::getActualClassNameForMorph(Customer::class) => Customer::class,
            Model::getActualClassNameForMorph(Vendor::class) => Vendor::class,
            Model::getActualClassNameForMorph(Factory::class) => Factory::class,
        ]);
    }
}
