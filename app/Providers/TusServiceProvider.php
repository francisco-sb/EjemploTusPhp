<?php

namespace App\Providers;

use TusPhp\Tus\Server as TusServer;
use Illuminate\Support\ServiceProvider;

class TusServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('tus-server', function ($app) {
            $server = new TusServer();

            $server
                ->setApiPath('/tus') // tus server endpoint.
                ->setUploadDir(storage_path('app/public/uploads')); // uploads dir.

            return $server;
        });
    }
}

