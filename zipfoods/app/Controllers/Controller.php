<?php

namespace App\Controllers;

class Controller
{
    public $app;

    public function __construct($app)
    {
        $this->app = $app;
    }
}
