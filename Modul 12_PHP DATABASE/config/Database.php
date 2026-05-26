<?php

class Database {

    private $host = "127.0.0.1";
    private $user = "root";
    private $pass = "12345";
    private $db   = "modul12";

    public $conn;

    public function connect(){

        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        if($this->conn->connect_error){
            die("Koneksi gagal : " . $this->conn->connect_error);
        }

        return $this->conn;
    }
}
?>