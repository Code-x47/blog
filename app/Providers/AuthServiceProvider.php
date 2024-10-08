<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\Business;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("task_delete",function(User $user) {
         
            return $user->role_id == Role::IS_MANAGER;
        });

        Gate::define("task_edit_post",function(User $user){
            return $user->role_id == Role::IS_MANAGER;
        });
    }
}
