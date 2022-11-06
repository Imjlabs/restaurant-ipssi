<?php
namespace App\Model;

use App\Entity\User;
use Core\Model\DefaultModel;

class UserModel extends DefaultModel {
    protected string $table = 'users';
    protected string $entity = 'User';

    public function findByEmail (string $email)
    {
        $stmt = "SELECT * FROM users WHERE email = '$email'"; 
        return $this->getData($stmt, true);
    }

    public function save(User $user)
    {
        $fullname = $user->getFullName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $phone_number = $user->getPhoneNumber();
        $status = $user->getStatus();
        $admin = $user->getAdmin();
        $created_at = $user->getCreated_at();
        $updated_at = $user->getUpdated_at();
        $stmt = "INSERT INTO users (fullname, email, password, phone_number, status, admin, created_at, updated_at) VALUES ('$fullname', '$email', '$password', '$phone_number', '$status', '$admin', '$created_at', '$updated_at')";
        $prepare = $this->pdo->prepare($stmt);
        $prepare->execute();
    }
}