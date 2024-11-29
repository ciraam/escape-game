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

    public function defi1($tentative) {
        $sql = "select login, code from defi1";
        //  where login='$tentative'";
        $requete = $this -> bd -> prepare($sql);
        $requete -> execute();
        $message = $requete -> fetchAll();
        foreach ($message as $value) {
            if ($tentative == 'admin";--' || $tentative == "admin';--" || $tentative == 'admin"; --' || $tentative == "admin'; --") {
                echo "<p>".$value['code']."</p>";
                return true;
            } else if ($value['login'] != $tentative) {
                return false;
                // echo "Identifiant et/ou mot de passe erroné(s) !";
            }
        }
    }
}

?>