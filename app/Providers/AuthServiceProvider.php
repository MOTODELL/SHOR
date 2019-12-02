<?php

namespace App\Providers;

use App\User;
use App\Policies\UserPolicy;
use App\Date;
use App\Policies\DatePolicy;
use App\Cause;
use App\Policies\CausePolicy;
use App\Patient;
use App\Policies\PatientPolicy;
use App\Dependency;
use App\Policies\DependencyPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Date::class => DatePolicy::class,
        Cause::class => CausePolicy::class,
        Patient::class => PatientPolicy::class,
        Dependency::class => DependencyPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('view-icons', function ($user)
        {
            return true;
        });

        Gate::resource('user', 'UserPolicy');
        Gate::resource('date', 'DatePolicy');
        Gate::resource('cause', 'CausePolicy');
        Gate::resource('patient', 'PatientPolicy');
        Gate::resource('dependency', 'DependencyPolicy');
    }
}
