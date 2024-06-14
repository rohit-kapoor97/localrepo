<?php

namespace App\Providers;

use App\Model\companyDetail;
use Illuminate\Support\ServiceProvider;
use App\Services\companyDetailservice;
use Illuminate\Contracts\Foundation\Application;

 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->bind(companyDetailservice::class, function(Application $app){
        return new companyDetailservice;
      });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
     
}
  



}

