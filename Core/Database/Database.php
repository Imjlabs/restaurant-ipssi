<?php
namespace Core\Database;

class Database {

    private string $host;
    private string $dbname;
    private string $user;
    private string $password;
    protected ?\PDO $pdo;
    protected string $entity;

    public function __construct()
    {
        try {
            $this->getConfig();
            $this->pdo = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->password,
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    private function getConfig(): void
    {
        if (file_exists(ROOT. "/config/dbConfig.php")) {
            require_once ROOT. "/config/dbConfig.php";
            $this->host = $dbConfig['host'];
            $this->dbname = $dbConfig['db'];
            $this->user = $dbConfig['user'];
            $this->password = $dbConfig['password'];
        } else {
            throw new \Exception("Le fichier de config de la BDD est manquant", 1);
        }
    }

    public function getPdo(): ?\PDO
    {
        return $this->pdo;
    }

    protected function getData (string $stmt, bool $one = false): array|object
    {
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\". $this->entity);
        if ($one) {
            $data = $query->fetch();
        } else {
            $data = $query->fetchAll();
        }
        var_dump($data);

        return $data ? 
            $data : 
            throw new \Exception("Aucune donnée n'a été trouvée");
    }
}