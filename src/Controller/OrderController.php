<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class MenuController extends DefaultController {

    public function index() {
        $this->render("order/index", null, "Commande", 
        [
            
        ]);
    }
}