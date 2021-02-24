<?php

namespace App\Controller;

use App\System\Controller\AbstractController;


class IndexController extends AbstractController
{
    public function indexAction($params = [])
    {

        $this->page = $this->view->render('index/index', ['name' => 'Uladzimir']);
        return $this->output();
    }
}