<?php

Class Log {
    private $id;
    private $message;

    function __construct($id, $message) {
        $this -> id = $id;
        $this -> message = $message;
    }

    function getId() {
        return $this -> id;
    }
    function getMessage() {
        return $this -> message;
    }
    function setId($id) {
        $this -> id = $id;
    }
    function setMessage($message) {
        $this -> message = $message;
    }
}

Class LogManager {
    private $bd;

    function __construct() {
        $this-> bd = new PDO("mysql:host=localhost;dbname=escape_game", 'root', '');
    }

    public function addLog($message) {
        if (file_exists('../log.txt')){
        } else {
            fopen('log.txt','c+w');
        }
        date_default_timezone_set("Europe/Paris");

        $ip = $_SERVER['REMOTE_ADDR'];
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $date = date('d/m/Y H:i:s');
        $log = "Date: ".$date." | IP: ".$ip." | Browser: ".$browser." | Message: ".$message;
        
        $fp = fopen('../log.txt', 'a');
        fwrite($fp, $log."\n");
        fclose($fp);
    }
}

?>