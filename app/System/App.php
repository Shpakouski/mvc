<?php

namespace App\System;


class App
{

    private $router;
    private $dbDriver;

    public function run()
    {
        $this->router = new Router();
        $this->router->processRequest();
    }
}