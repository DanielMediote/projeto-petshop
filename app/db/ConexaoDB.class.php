<?php

class ConexaoDB{

    protected $database = "dbPetshop";
    protected $host = "database";
    protected $port = "5432";
    protected $username = "petmaster";
    protected $password = "pintcher45";

    private function open(){
       try {
        $conn = new PDO('pgsql:host='.$this->host.';port='.$this->port.';dbname='.$this->database,
         $this->username, $this->password);
         echo "Conexão OK";
       } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
       }
       return $conn;
    }


    
}
