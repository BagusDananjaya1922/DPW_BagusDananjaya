<?php

class Mahasiswa {

    private $conn;
    private $table = "t_mahasiswa";

    public function __construct($db){
        $this->conn = $db;
    }

    public function tampil($search = ""){

        if($search != ""){

            $sql = "SELECT * FROM " . $this->table . "
                    WHERE namaMhs LIKE ?
                    ORDER BY npm ASC";

            $stmt = $this->conn->prepare($sql);

            $keyword = "%".$search."%";

            $stmt->bind_param("s", $keyword);

            $stmt->execute();

            return $stmt->get_result();

        } else {

            $sql = "SELECT * FROM " . $this->table . "
                    ORDER BY npm ASC";

            return $this->conn->query($sql);
        }
    }

    public function tambah($npm, $nama, $prodi, $alamat, $hp){

        $sql = "INSERT INTO " . $this->table . "
                (npm, namaMhs, prodi, alamat, noHP)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "issss",
            $npm,
            $nama,
            $prodi,
            $alamat,
            $hp
        );

        return $stmt->execute();
    }

    public function getById($npm){

        $sql = "SELECT * FROM " . $this->table . "
                WHERE npm=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i", $npm);

        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public function update($npmLama, $npm, $nama, $prodi, $alamat, $hp){

        $sql = "UPDATE " . $this->table . "
                SET npm=?, namaMhs=?, prodi=?, alamat=?, noHP=?
                WHERE npm=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "issssi",
            $npm,
            $nama,
            $prodi,
            $alamat,
            $hp,
            $npmLama
        );

        return $stmt->execute();
    }

    public function hapus($npm){

        $sql = "DELETE FROM " . $this->table . "
                WHERE npm=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i", $npm);

        return $stmt->execute();
    }
}
?>