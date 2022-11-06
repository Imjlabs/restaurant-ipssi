<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class MenuController extends DefaultController {

    public function index() {
        $this->render("menu/index", null, "Menu", 
        [

        ]);
    }
}