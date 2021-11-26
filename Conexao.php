<?php

class Conexao{

  private $servername = "localhost";
  private $username = "root";
  private $password = "root";
  private $dbname = "db_teste";
  private $conn = null;

  public function __construct(){
    try
    {
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
    catch (Exception $e)
    {
      return $this->conn->connect_error;
    }
  }

  public function getConnection(){
    
    return $this->conn;
  }
  
  public function dieConnection(){
    $this->conn->close();
  }
};
?>