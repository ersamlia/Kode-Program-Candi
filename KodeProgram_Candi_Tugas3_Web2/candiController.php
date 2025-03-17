<?php
require_once 'koneksi.php';

class Candi{
    private $conn;

    public function __construct()
    {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function getAll(){
        $result = $this->conn->query("SELECT * FROM candi");
        $data = [];
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function insert($nama, $lokasi, $deskripsi){
        $query = "INSERT INTO candi (id, nama, lokasi, deskripsi) VALUES ('', '$nama', '$lokasi', '$deskripsi')";
        return $this->conn->query($query);
    }

    public function getById($id){
        $query = "SELECT * FROM candi WHERE id = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    public function update($id, $nama, $lokasi, $deskripsi){
        $query = "UPDATE candi SET nama='$nama', lokasi='$lokasi', deskripsi='$deskripsi' WHERE id=$id";
        return $this->conn->query($query);
    }

    public function delete($id){
        $query = "DELETE FROM candi WHERE id=$id";
        return $this->conn->query($query);
    }
}
?>