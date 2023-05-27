<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\SMTPApi;

class SendinblueServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    // public function register()
    // {
    //     $this->app->singleton(SMTPApi::class, function ($app) {
    //         $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', config('services.sendinblue.api_key'));
    //         return new SMTPApi(null, $config);
    //     });
    // }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
