<?php

require_once 'Connection.php';

class UserModel {
    private $pdo;

    public function __construct() {
        $this->pdo = Connection::conectar();
    }

    public function getAllUsers() {
        $stmt = $this->pdo->query("SELECT * FROM User");
        return $stmt->fetchAll();
    }

    public function addUsers($data) {
        $stmt = $this->pdo->prepare("INSERT INTO User(id, name, lastname) VALUES(:id, :name, :lastname)");
        $stmt->execute([
            'id' => $data['id'],
            'name' => $data['name'],
            'lastname' => $data['lastname']
        ]);
    }

    public function updateUsers($data) {
        $stmt = $this->pdo->prepare("UPDATE User SET name = :name, lastname = :lastname WHERE id = :id");
        $stmt->execute([
            'id' => $data['id'],
            'name' => $data['name'],
            'lastname' => $data['lastname']
        ]);
    }
}

?>
