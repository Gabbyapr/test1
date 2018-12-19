<?php 
  class Database {
    // DB Params
    private $host     ='localhost'; //$ = variabel
    private $db_name  ='API';
    private $username ='root';
    private $password = '';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null; //

      try { //try catch block
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password); //PDO (tipe database, krn manggil variabel use .)
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage(); //if connection goes wrong
      }

      return $this->conn;
    }
  }