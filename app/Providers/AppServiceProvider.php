<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//        Gate::define('viewPulse', function (User $user) {
//            return $user->isAdmin();
//        });
        Livewire::setUpdateRoute(function ($handle){
            return Route::post('reverb/public/livewire/update', $handle);
        });
    }
}
