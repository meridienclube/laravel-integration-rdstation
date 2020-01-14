<?php

namespace ConfrariaWeb\IntegrationRdStation\Providers;

use Illuminate\Support\ServiceProvider;
use MeridienClube\Meridien\Services\Integrations\RdStationService;

class IntegrationRdStationServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('RdStationService', function () {
            return new RdStationService();
        });
    }

}
