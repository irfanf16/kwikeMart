<?php

namespace App\Providers;

use App\Repositories\AuthRepository\AuthRepository;
use App\Repositories\AuthRepository\AuthRepositoryInterface;
use App\Repositories\StoreRepository\StoreRepository;
use App\Repositories\StoreRepository\StoreRepositoryInterface;
use App\Repositories\StripeRepository\StripeRepository;
use App\Repositories\StripeRepository\StripeRepositoryInterface;
use App\Repositories\UserRepository\UserRepositoryInterface;
use App\Repositories\UserRepository\UserRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(AuthRepositoryInterface::class,AuthRepository::class);
        $this->app->singleton(StoreRepositoryInterface::class,StoreRepository::class);
        $this->app->singleton(stripeRepositoryInterface::class,StripeRepository::class);
    }
}
