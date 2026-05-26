<?php

class Dosen {

    private $conn;
    private $table = "t_dosen";

    public function __construct($db){
        $this->conn = $db;
    }

    public function tampil($search = ""){

        if($search != ""){

            $sql = "SELECT * FROM " . $this->table . "
                    WHERE namaDosen LIKE ?
                    ORDER BY idDosen ASC";

            $stmt = $this->conn->prepare($sql);

            $keyword = "%".$search."%";

            $stmt->bind_param("s", $keyword);

            $stmt->execute();

            return $stmt->get_result();

        } else {

            $sql = "SELECT * FROM " . $this->table . "
                    ORDER BY idDosen ASC";

            return $this->conn->query($sql);
        }
    }

    public function tambah($nama, $hp){

        $sql = "INSERT INTO " . $this->table . "
                (namaDosen, noHP)
                VALUES (?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("ss", $nama, $hp);

        return $stmt->execute();
    }

    public function getById($id){

        $sql = "SELECT * FROM " . $this->table . "
                WHERE idDosen=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i", $id);

        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $nama, $hp){

        $sql = "UPDATE " . $this->table . "
                SET namaDosen=?, noHP=?
                WHERE idDosen=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("ssi", $nama, $hp, $id);

        return $stmt->execute();
    }

    public function hapus($id){

        $sql = "DELETE FROM " . $this->table . "
                WHERE idDosen=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
?>