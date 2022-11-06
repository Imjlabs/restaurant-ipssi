<?php

use App\Controller\PageController;
use App\Controller\UserController;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

if (!isset($_GET['action'])) {
    (new PageController)->index();
}
else {
    if ($_GET['action'] == "login") {
        (new UserController)->login();
    }
    else if ($_GET['action'] == "registration") {
        (new UserController)->registration();
    }
    else if ($_GET['action'] == "valideRegistration") {
        echo (new UserController)->valideRegistration();
    }
}