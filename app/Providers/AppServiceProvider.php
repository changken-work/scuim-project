<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use App;
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
        //redirect http to https
        if (App::environment('production')) {
            Url::forceScheme('https');
        }

        Schema::defaultStringLength(191);
        $this->bootEloquentMorphs();
    }

    /**
     * 自定義多態關聯的類型
     */
    private function bootEloquentMorphs()
    {
        Relation::morphMap([
            "admins" => Admin::class,
            "customers" => Customer::class,
            "vendors" => Vendor::class,
            "factories" => Factory::class,
        ]);
    }
}
