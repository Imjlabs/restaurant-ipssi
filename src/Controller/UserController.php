<?php
namespace App\Controller;

// use App\Model\UserModel;
use Core\Controller\DefaultController;

class UserController extends DefaultController {

    // private UserModel $model;

    // public function __construct()
    // {
    //     $this->model = new UserModel;
    // }

    public function connexion()
    {
        $this->render("user/connexion");
    }
}