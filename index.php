<?php

session_start();

use App\Controller\PageController;
use App\Controller\MenuController;
use App\Controller\ReservationController;
use App\Controller\OrderController;
use App\Controller\UserController;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

if (!isset($_GET['action'])) {
    (new PageController)->index();
}
else {
    if ($_GET['action'] == "menu") {
        (new MenuController)->index();
    }
    else if ($_GET['action'] == "reservation") {
        (new ReservationController)->index();
    }
    else if ($_GET['action'] == "order") {
        (new OrderController)->index();
    }
    else if ($_GET['action'] == "login") {
        (new UserController)->login();
    }
    else if ($_GET['action'] == "registration") {
        (new UserController)->registration();
    }
    else if ($_GET['action'] == "valideRegistration") {
        echo (new UserController)->valideRegistration();
    }
    else if ($_GET['action'] == "logout") {
        echo (new UserController)->logout();
    }
}