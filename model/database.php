<?php 

class Db{
    public $conn;

    public function conn(){
        $env = (include '../config/env.php');
        $this->conn = null;

        try{
            $this->conn = new
            PDO("mysql:host=".$env['bd']['host']."; dbname=".$env['bd']['database'], $env['bd']['user'], $env['bd']['password']);

            $this->conn->exec("set names utf8");
        }catch(PDOException $ex){
            echo "Connection error: ". $ex->getMessage();
        }
        return $this->conn;
    }
}

?>