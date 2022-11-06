<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class PageController extends DefaultController {

    public function index() {
        $this->render("page/index", null, "Accueil", 
        [
            '<link rel="stylesheet" href="./src/css/index.css">'
        ]);
    }
}