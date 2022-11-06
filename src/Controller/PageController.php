<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class PageController extends DefaultController {

    public function index() {
        $this->render("page/index", null, "Accueil", 
        [
            '<link rel="stylesheet" href="./src/css/linearicons.css">',
            '<link rel="stylesheet" href="./src/css/font-awesome.min.css">',
            '<link rel="stylesheet" href="./src/css/availability-calendar.css">',
            '<link rel="stylesheet" href="./src/css/magnific-popup.css">',
            '<link rel="stylesheet" href="./src/css/nice-selec.css">',
            '<link rel="stylesheet" href="./src/css/owl.carousel.css">',
            '<link rel="stylesheet" href="./src/css/bootstrap.css">',
            '<link rel="stylesheet" href="./src/css/bootstrap-datepicker.css">',
            '<link rel="stylesheet" href="./src/css/main.css">'
        ]);
    }
}