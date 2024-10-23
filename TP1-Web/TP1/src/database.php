<?php

class Database {
    private $db;

    function __construct() {
        $this->db = new PDO("mysql:host=db;port=3306;dbname=tp1", "tp1", "p@ssw0rd");
        if(!$this->getUser("admin")) { // Create admin user with random password for the first time
            $this->addUser("admin", `pwgen -c -n -y -s 17 1 | tr -d '\n'`);
        }
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser($username, $password) {
        $query = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $query->execute([
            "username" => $username,
            "password" => $password
        ]);
    }

    public function getUser($username) {
        $query = $this->db->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
        $query->execute([
            "username" => $username
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function setTokenForUser($username) {
        $query = $this->db->prepare("UPDATE users SET token = :token WHERE username = '{$username}'");
        $query->execute([
            "token" => bin2hex(openssl_random_pseudo_bytes(32))
        ]);
    }
}

$db = new Database;


