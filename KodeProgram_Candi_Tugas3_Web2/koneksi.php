<?php
class Koneksi{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "crud_candi";
    private $port = 3308; 
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
        if ($this->conn->connect_error){
            die("Koneksi gagal: ". $this->conn->connect_error);
        }
    }
}
?>