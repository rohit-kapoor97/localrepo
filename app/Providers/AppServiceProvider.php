<?php

namespace App\Providers;
use App\Contracts\CompanyInterface;
use Illuminate\Support\ServiceProvider;
use App\Services\companyDetailservice;
use Illuminate\View\View;
use App\View\Components\CompanyLayout;


 

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $this->app->singleton(CompanyInterface::class, function ($app) {
      return new CompanyDetailService($name, $company, $contact, $userid);
  });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    
     
}
  



}

