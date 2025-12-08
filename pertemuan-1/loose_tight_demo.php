<?php

// TIGHT COUPLING
class Database {
    public function connect() {
        return "Terhubung ke database utama...";
    }
}

class UserService {
    private Database $db;

    public function __construct() {
        // Tight coupling → UserService TERGANTUNG Database
        $this->db = new Database();
    }

    public function doSomething() {
        return $this->db->connect();
    }
}

// Contoh pemakaian
$tight = new UserService();
echo "Tight: " . $tight->doSomething() . "\n\n";
// LOOSE COUPLING
interface DBConnection {
    public function connect();
}

class MySQLConnection implements DBConnection {
    public function connect() {
        return "Terhubung ke MYSQL...";
    }
}

class UserServiceLoose {
    private DBConnection $db;

    // dependency injection → fleksibel
    public function __construct(DBConnection $db) {
        $this->db = $db;
    }

    public function doSomething() {
        return $this->db->connect();
    }
}

// Contoh pemakaian
$mysql = new MySQLConnection();
$loose = new UserServiceLoose($mysql);
echo "Loose: " . $loose->doSomething();
