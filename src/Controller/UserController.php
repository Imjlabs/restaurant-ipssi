<?php
namespace App\Controller;

use App\Entity\User;
use App\Model\UserModel;
use Core\Controller\DefaultController;

class UserController extends DefaultController {

    private UserModel $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function registration()
    {
        $this->render("user/registration", null, "Inscription", 
        [
            '<link rel="stylesheet" href="./src/css/registration.css">'
        ],
        [
            '<script src="./src/js/registration.js"></script>'
        ]);
    }

    public function valideRegistration()
    {
        if(isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['adress']) && isset($_GET['phone']) && isset($_GET['city']) && isset($_GET['email']) && isset($_GET['password'])) {
            $firstName = $_GET['firstName'];
            $lastName = $_GET['lastName'];
            $adress = $_GET['adress'];
            $phone = $_GET['phone'];
            $city = $_GET['city'];
            $email = $_GET['email'];
            $password = $_GET['password'];
        }
        else {
            throw new \UnexpectedValueException("Les champs ne sont pas tous bien remplis");
        }
        $user = $this->model->findByEmail($email);
        //var_dump($user);
        $status = "erreur";
        if ($user == false) {
            $this->add($firstName, $lastName, $adress, $phone, $city, $email, "customer", $password);
            $status = "valide";
        }
        $response = [
            "1" => $status
        ];
        echo json_encode($response);
    }

    public function login()
    {
        $this->render("user/login", null, "Connexion",
        [
            '<link rel="stylesheet" href="./src/css/login.css">'
        ],
        [
            '<script src="./src/js/login.js"></script>'
        ]);
    }

    // public function valideConnexion()
    // {
    //     if(isset($_GET['email']) && isset($_GET['password'])) {
    //         $email = $_GET['email'];
    //         $password = $_GET['password'];
    //     }
    //     else {
    //         throw new \UnexpectedValueException("Au moins un des 2 champs n'est pas bien remplis");
    //     }
    //     $user = $this->model->find($email);
    //     if ($email = $user["email"]) {
    //         if ($password = $user["password"]) {
    //             return $user;
    //         }
    //         else {
    //             return "error";
    //         }
    //     }
    //     else {
    //         return "error";
    //     }
    //     return $user;

    // }

    public function add ($firstName, $lastName, $adress, $phone, $city, $email, $status, $password)
    {
        $user = new User;
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setAdress($adress);
        $user->setPhone($phone);
        $user->setCity($city);
        $user->setEmail($email);
        $user->setStatus($status);
        $user->setPassword($password);
        $this->model->save($user);
    }
}