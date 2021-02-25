<?php

namespace App\Controller;

use App\System\Controller\AbstractController;
use App\Model\User;


class IndexController extends AbstractController
{
    public function indexAction($params = [])
    {

//        $user = new User();
//        $user->login = 'admin';
//        $user->email = 'admin@admin.by';
//        $user->save();

//        var_dump(User::all());
//        var_dump(User::find(2));

        $this->page = $this->view->render('index/index', ['name' => 'Uladzimir']);
        return $this->output();
    }
}