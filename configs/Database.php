<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'nvm';
const DB_PORT = 3306;
class Database{
    private $host,$user_name,$pass_word,$port,$db;
    private $conn;
    public $result;
    public function __construct(){
        $this->host = DB_HOST;
        $this->user_name = DB_USERNAME;
        $this->pass_word = DB_PASSWORD;
        $this->port = DB_PORT;
        $this->db = DB_NAME;
        $this->connect();

    }
    private function connect(){

       $connection = mysqli_connect($this->host, $this->user_name, $this->pass_word, $this->db,$this->port) ;
       if(!$connection){
           die("not connected database!");
       }
       $this->conn = $connection;
    }
    public function query($sql){
        $this->result = mysqli_query($this->conn,$sql);
    }
    public function insert($sql){

        return mysqli_query($this->conn,$sql,MYSQLI_STORE_RESULT);
    }
}