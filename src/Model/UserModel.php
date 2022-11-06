<?php
namespace App\Model;

use App\Entity\User;
use Core\Model\DefaultModel;

class UserModel extends DefaultModel {
    protected string $table = 'user';
    protected string $entity = 'User';

    public function findByEmail (string $email)
    {
        $stmt = "SELECT * FROM user WHERE email = '$email'"; 
        return $this->getData($stmt, true);
    }

    public function save(User $user)
    {
        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $adress = $user->getAdress();
        $phone = $user->getPhone();
        $city = $user->getCity();
        $email = $user->getEmail();
        $status = $user->getStatus();
        $password = $user->getPassword();
        $stmt = "INSERT INTO user (firstName, lastName, adress, phone, city, email, status, password) VALUES ('$firstName', '$lastName', '$adress', '$phone', '$city', '$email', '$status', '$password')";
        $prepare = $this->pdo->prepare($stmt);
        $prepare->execute();
    }
}