<?php
class Database{
  
    // specify your own database credentials
    private $host = '127.0.0.1';
    private $db_name = "mobi_teste";
    private $username = 'root';
    private $password = '';
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erro ao conectar com o banco de dados.";
        }
        error_reporting(E_ERROR | E_PARSE);
        return $this->conn;
    }
}