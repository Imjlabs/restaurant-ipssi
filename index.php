<?php

if (!isset($_GET['action'])) {
    require_once "View/index.php";
}
else {
    if ($_GET['action'] == "menu") {
        require_once "View/menu.php";
    }
    else if ($_GET['action'] == "history") {
        require_once "View/history.php";
    }
    else if ($_GET['action'] == "reservation") {
        require_once "View/reservation.php";
    }
    else if ($_GET['action'] == "contact") {
        require_once "View/contact.php";
    }
    else if ($_GET['action'] == "connection") {
        require_once "View/connection.php";
    }
    else if ($_GET['action'] == "registration") {
        require_once "View/registration.php";
    }
}