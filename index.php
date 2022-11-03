<?php

//use App\Controller\PageController;
use App\Controller\UserController;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

//(new PageController)->index();
(new UserController)->connexion();
