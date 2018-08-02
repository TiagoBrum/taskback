<?php

namespace App;

use Silex\Application;

class ServicesLoader
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function bindServicesIntoContainer()
    {
        $this->app['task.service'] = function() {
            return new Services\TaskService($this->app["db"]);
        };
    }
}

