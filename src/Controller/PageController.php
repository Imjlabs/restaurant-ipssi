<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class PageController extends DefaultController {

    public function index() {
        $this->render("page/index");
    }

    public function contact() {
        $this->render("page/contact");
    }

    public function history() {
        $this->render("page/history");
    }
}