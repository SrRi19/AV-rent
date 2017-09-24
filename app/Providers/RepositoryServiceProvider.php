<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\VehicleRepository::class, \App\Repositories\VehicleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoryRepository::class, \App\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VehicleTypeRepository::class, \App\Repositories\VehicleTypeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\AddressRepository::class, \App\Repositories\AddressRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\LocationRepository::class, \App\Repositories\LocationRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PaymentModeRepository::class, \App\Repositories\PaymentModeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\TransactionRepository::class, \App\Repositories\TransactionRepositoryEloquent::class);
        //:end-bindings:
    }
}
