<?php

namespace BahriCanli\Trendyol;

use GuzzleHttp\Client;
use UnexpectedValueException;

use Illuminate\Support\ServiceProvider;
use IS\PazarYeri\Trendyol\TrendyolClient;
use IS\PazarYeri\Trendyol\Helper\TrendyolException;

/**
 * Class TrendyolServiceProvider.
 */
class TrendyolServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->registerTrendyolClient();
        $this->registerTrendyolService();
    }

    /**
     * Register the Trendyol Client binding with the container.
     *
     * @return void
     */
    private function registerTrendyolClient()
    {
        $this->app->bind(Clients\TrendyolClientInterface::class, function () {
            $client = null;
            $username = config('services.trendyol.username');
            $password = config('services.trendyol.password');

            $client = new TrendyolClient(); 
            $client->setSupplierId(100000);
            $client->setUsername($username);
            $client->setPassword($password);

            return $client;
        });
    }

    /**
     * Register the Trendyol-sms service.
     */
    private function registerTrendyolService()
    {
        
        $this->app->singleton('trendyol', function ($app) {
            return new TrendyolService(
                $app->make(Clients\TrendyolClientInterface::class)            
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'trendyol',
            Clients\TrendyolClientInterface::class,
        ];
    }

}
