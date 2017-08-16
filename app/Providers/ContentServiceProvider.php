<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Spark\Content\ContentAPI;

use GuzzleHttp\Client;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Spark\Repositories\ContentRepositoryInterface', 
            'Spark\Repositories\ContentRepository'
        );

        $this->app->bind('content', function()
        {
            $client = new Client;

            return new ContentAPI($client);
        });
    }
}
