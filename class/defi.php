<?php

Class Defi {
    private $id;
    private $code;

    function __construct($id, $code) {
        $this -> id = $id;
        $this -> code = $code;
    }

    function getId() {
        return $this -> id;
    }
    function getCode() {
        return $this -> code;
    }
    function setId($id) {
        $this -> id = $id;
    }
    function setCode($code) {
        $this -> code = $code;
    }
}

Class DefiManager {
    private $bd;

    function __construct() {
        $this-> bd = new PDO("mysql:host=localhost;dbname=escape_game", 'root', '');
    }

    public function defi1($login, $mdp) {
        $sql = "select login, mdp, code from defi1 where login='$login' and mdp='$mdp'";
        $requete = $this -> bd -> prepare($sql);
        $requete -> execute();
        $message = $requete -> fetchAll();
        // print_r($message);
        // var_dump($message);
        if ($requete -> fetchAll()) {
            return $message[0]['code'];
        }
    }

    public function defi2($tentative) {
        
    }
}

?>