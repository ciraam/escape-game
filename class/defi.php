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

        if ($requete -> fetchAll()) {
            return $message[0]['code'];
        }
    }

    public function defi2($pseudo, $mail, $commentaire) {
        $sql = "insert into defi2 (pseudo, mail, commentaire, date) values ('$pseudo', '$mail', '$commentaire', now())";
        $requete = $this -> bd -> prepare($sql);
        $requete -> execute();

        if (preg_match("/<script>/", $pseudo) || preg_match("/<script>/", $mail) || preg_match("/<script>/", $commentaire)) {
            return true;
        }
    }

    public function showCommentDefi2() {
        $sql = "select * from defi2 order by date desc";
        $requete = $this -> bd -> prepare($sql);
        $requete -> execute();
        $message = $requete -> fetchAll();

        return $message;
    }

    public function checkForm($attaque, $attaque2, $attaque3, $solution, $solution2, $solution3) {
        $score = 0;

        if ($attaque == 'sql') {
            $score = $score + 1;
        }
        if ($solution == 1) {
            $score = $score + 3;
        } else if ($solution == 3) {
            $score = $score + 1;
        }
        if ($attaque2 == 'xss') {
            $score = $score + 1;
        }
        if ($solution2 == 2) {
            $score = $score + 3;
        } else if ($solution2 == 4) {
            $score = $score + 1;
        }
        if ($attaque3 == 'session') {
            $score = $score + 1;
        }
        if ($solution3 == 3) {
            $score = $score + 3;
        } else if ($solution3 == 5) {
            $score = $score + 1;
        }

        return $score;
    }
}

?>