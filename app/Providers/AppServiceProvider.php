<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

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
        Jetstream::useUserModel('App\Models\User');
        Jetstream::useTeamModel('App\Models\Team');
        Jetstream::useMembershipModel('App\Models\Membership');
    }
}
