<?php

class Matakuliah {

    private $conn;
    private $table = "t_matakuliah";

    public function __construct($db){
        $this->conn = $db;
    }

    public function tampil($search = ""){

        if($search != ""){

            $sql = "SELECT * FROM " . $this->table . "
                    WHERE namaMK LIKE ?
                    ORDER BY kodeMK ASC";

            $stmt = $this->conn->prepare($sql);

            $keyword = "%".$search."%";

            $stmt->bind_param("s", $keyword);

            $stmt->execute();

            return $stmt->get_result();

        } else {

            $sql = "SELECT * FROM " . $this->table . "
                    ORDER BY kodeMK ASC";

            return $this->conn->query($sql);
        }
    }

    public function tambah($kode, $nama, $sks, $jam){

        $sql = "INSERT INTO " . $this->table . "
                (kodeMK, namaMK, sks, jam)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "isii",
            $kode,
            $nama,
            $sks,
            $jam
        );

        return $stmt->execute();
    }

    public function getById($kode){

        $sql = "SELECT * FROM " . $this->table . "
                WHERE kodeMK=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i", $kode);

        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public function update($kodeLama, $kode, $nama, $sks, $jam){

        $sql = "UPDATE " . $this->table . "
                SET kodeMK=?, namaMK=?, sks=?, jam=?
                WHERE kodeMK=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param(
            "isiii",
            $kode,
            $nama,
            $sks,
            $jam,
            $kodeLama
        );

        return $stmt->execute();
    }

    public function hapus($kode){

        $sql = "DELETE FROM " . $this->table . "
                WHERE kodeMK=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i", $kode);

        return $stmt->execute();
    }
}
?>