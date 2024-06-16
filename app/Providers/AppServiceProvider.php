<?php

namespace App\Providers;

use App\Model\companyDetail;
use App\Contracts\compDetail;
use Illuminate\Support\ServiceProvider;
use App\Services\companyDetailservice;


 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->bind(compDetail::class, companyDetailservice::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
     
}
  



}

