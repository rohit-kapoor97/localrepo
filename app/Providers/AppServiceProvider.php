<?php

namespace App\Providers;
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
      $this->app->bind(detailCompany::class, companyDetailservice::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
     
}
  



}

