<?php

session_start();

use Core\Routeur\Routeur;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";
Routeur::routes();