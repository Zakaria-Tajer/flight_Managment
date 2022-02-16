<?php


class Db {
    public $serverName;
    public $username;
    public $password;
    public $dbname;

    protected function connect(){
        $this->serverName = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'flights';


        $conn = new mysqli($this->serverName,$this->username,$this->password,$this->dbname);

        return $conn;

    }



}



?>