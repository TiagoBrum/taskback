<?php

namespace App;

use Silex\Application;

class RoutesLoader
{
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->instantiateControllers();

    }

    private function instantiateControllers()
    {
        $this->app['task.controller'] = function() {
            return new Controllers\TaskController($this->app['task.service']);
        };
    }

    public function bindRoutesToControllers()
    {
        $api = $this->app["controllers_factory"];

        $api->get('/task', "task.controller:getAll");
        $api->get('/task/{id}', "task.controller:getOne");
        $api->post('/task', "task.controller:save");
        $api->put('/task/{id}', "task.controller:update");
        $api->delete('/task/{id}', "task.controller:delete");

        $this->app->mount($this->app["api.endpoint"].'/'.$this->app["api.version"], $api);
    }
}

