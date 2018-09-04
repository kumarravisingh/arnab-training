<?php

namespace App\Providers;

use App\Modules\SmsNotifier;
use App\Modules\StripeBiller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\BillerInterface;

class BillingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


    }
}
