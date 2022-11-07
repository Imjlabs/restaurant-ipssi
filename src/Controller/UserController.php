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
        if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['phone_number'])) {
            $fullname = $_GET['name'];
            $email = $_GET['email'];
            $password = $_GET['password'];
            $phone_number = $_GET['phone_number'];
        }
        else {
            throw new \UnexpectedValueException("Les champs ne sont pas tous bien remplis");
        }
        $user = $this->model->findByEmail($email);
        //var_dump($user);
        $status = "erreur";
        if ($user == false) {
            $hash_password = hash('sha256', $password);
            $this->add($fullname, $email, $hash_password, $phone_number, 0, 0);
            $status = "valide";
        }
        $response = [
            "status" => $status
        ];
        echo json_encode($response);
    }

    public function registrationConfirmation()
    {
        $this->render("user/registrationConfirmation", null, "Connexion");
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

    public function valideLogin()
    {
        if(isset($_GET['email']) && isset($_GET['password'])) {
            $email = $_GET['email'];
            $password = $_GET['password'];
        }
        else {
            throw new \UnexpectedValueException("Au moins un des 2 champs n'est pas remplis");
        }
        $user = $this->model->findByEmail($email);
        $status = "erreur";
        if ($user != false) {
            $hash_password = hash('sha256', $password);
            if ($hash_password == $user->getPassword()) {
                $status = "valide";
                $_SESSION['user'] = $user;
            }
        }
        $response = [
            "status" => $status
        ];
        echo json_encode($response);
    }

    public function logout ()
    {
        session_destroy();
        header('Location: ./');
    }

    public function add ($fullname, $email, $password, $phone_number, $status, $admin)
    {
        $user = new User;
        $user->setFullName($fullname);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setPhoneNumber($phone_number);
        $user->setStatus($status);
        $user->setAdmin($admin);
        $user->setCreated_at(date( "Y/m/d H:i:s"));
        $user->setUpdated_at(date( "Y/m/d H:i:s"));
        $this->model->save($user);
    }
}