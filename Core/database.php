<?php
class database {
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'mvc_blog';
    protected $conn;

    function __construct(){
      $sql = "mysql:host=$this->servername;dbname=$this->dbname";
  		$this->conn = new PDO($sql, $this->username,"$this->password",[
  			PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  			PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
  		]);
       // echo "Kết nối thành công. Host: ";
       $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
