<?php

namespace ConfrariaWeb\IntegrationRdStation\Providers;

use Illuminate\Support\ServiceProvider;
use ConfrariaWeb\IntegrationRdStation\Services\RdStationService;

class IntegrationRdStationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'integrationRdStation');
    }

    public function register()
    {
        $this->app->bind('IntegrationRdStationService', function () {
            return new RdStationService();
        });
    }

}
