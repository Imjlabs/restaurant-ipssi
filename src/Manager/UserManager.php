<?php
namespace App\Manager;

use Core\Database\Database;

class UserManager {

    private ?\PDO $pdo;

    public function __construct()
    {
        $this->pdo = (new Database)->getPdo();
    }

    public function connection(): void
    {
        if (isset($_GET['id']) && is_int($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            throw new \UnexpectedValueException("L'id attendu doit être un integer!");
        }
        $stmt = "SELECT * FROM user WHERE id = $id";
        $query = $this->pdo->query($stmt, \PDO::FETCH_OBJ);
        $category = $query->fetch();

        require_once ROOT . "/templates/caetgory/show.php";
    }
}