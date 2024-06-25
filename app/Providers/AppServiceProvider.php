<?php

namespace App\Providers;
use App\Contracts\CompanyInterface;
use Illuminate\Support\ServiceProvider;
use App\Services\companyDetailservice;
use App\Services\companyAccountservice;
use App\Services\companyUserservice;
use Illuminate\View\View;
use App\View\Components\CompanyLayout;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use Illuminate\Pagination\Paginator;


 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CompanyInterface::class, function ($app) {
            return new CompanyDetailService();
        });

        $this->app->singleton(CompanyInterface::class, function ($app) {
            return new CompanyAccountService();
        });
        $this->app->singleton(CompanyInterface::class, function ($app) {
            return new companyUserService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
     Gate::define('isadmin', function(user $user){
        
        return $user->role === 'Admin' 
                   ? :Response::deny('You must be an administrator.');
      
       });

       Gate::define('subadmin', function(user $user){
        
        return $user->role === 'Sub-Admin';
      
       });

       Paginator::useBootstrap();
     
    }
}

   

