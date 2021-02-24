<?php

namespace App\System\Controller;

use App\System\View\View;

abstract class AbstractController
{
    protected $view;
    protected $page;

    public function __construct()
    {
        $this->view = new View(BASE_PATH, TEMPLATE);
    }

    public function getPage()
    {
        return $this->page;
    }

    public function output()
    {
        echo $this->getPage();
    }
}