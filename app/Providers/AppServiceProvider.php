<?php

namespace App\Providers;

use App\Model\companyDetail;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Services\companyDetailservice;

use Illuminate\Support\Facades\App;
 




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      $service=App::make(companyDetailservice::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

}
}
