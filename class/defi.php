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

    public function defi2($pseudo, $mail, $commentaire) {
        $sql = "insert into defi2 (pseudo, mail, commentaire, date) values (:pseudo, :mail, :commentaire, now())";
        $requete = $this -> bd -> prepare($sql);
        $requete -> bindParam('pseudo', $pseudo, PDO::PARAM_STR);
        $requete -> bindParam('mail', $mail, PDO::PARAM_STR);
        $requete -> bindParam('commentaire', $commentaire, PDO::PARAM_STR);
        $requete -> execute();

        if (preg_match("/<script>/", $pseudo) || preg_match("/<script>/", $mail) || preg_match("/<script>/", $commentaire)) {
            return true;
            // echo "<script>alert('Bien joué ! Voici le code : J03M10, à insérer dans l\'URL)</script>";
            // echo "<p>Code : J03M10, à insérer dans l'URL !</p>";
        }
    }

    public function showCommentDefi2() {
        $sql = "select * from defi2 order by date desc";
        $requete = $this -> bd -> prepare($sql);
        $requete -> execute();
        $message = $requete -> fetchAll();

        return $message;
    }


    public function defi3($mdp) {
    }
}

?>