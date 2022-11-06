<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class OrderController extends DefaultController {

    public function index() {
        $this->render("order/index", null, "Commande", 
        [
            
        ]);
    }
}