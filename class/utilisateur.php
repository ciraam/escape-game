<?php

Class Utilisateur {
    private $id;
    private $pseudo;
    private $mail;
    private $dateInscription;
    private $score;

    function __construct($id, $pseudo, $mail, $dateInscription, $score) {
        $this -> id = $id;
        $this -> pseudo = $pseudo;
        $this -> mail = $mail;
        $this -> dateInscription = $dateInscription;
        $this -> score = $score;
    }

    function getId() {
        return $this -> id;
    }
    function getPseudo() {
        return $this -> pseudo;
    }
    function getMail() {
        return $this -> mail;
    }
    function getDateInscription() {
        return $this -> dateInscription;
    }
    function getScore() {
        return $this -> score;
    }
    function setId($id) {
        $this -> id = $id;
    }
    function setPseudo($pseudo) {
        $this -> pseudo = $pseudo;
    }
    function setMail($mail) {
        $this -> mail = $mail;
    }
    function setDateInscription($dateInscription) {
        $this -> dateInscription = $dateInscription;
    }
    function setScore($score) {
        $this -> score = $score;
    }
}

    Class UtilisateurManager {
        private $bd;
    
        function __construct() {
            $this-> bd = new PDO("mysql:host=localhost;dbname=escape_game", 'root', '');
        }

        function inscription($pseudo, $mail) {
            $sql = "insert into joueur (pseudo, mail, date_inscription, score) values (:pseudo, :mail, now(), null)";
            $requete = $this -> bd -> prepare($sql);
            $requete -> bindParam('pseudo', $pseudo, PDO::PARAM_STR);
            $requete -> bindParam('mail', $mail, PDO::PARAM_STR);
            $return = $requete -> execute();

            return $return;
        }

        function getId($pseudo, $mail) {
            $sql = "select id from joueur where pseudo = :pseudo and mail = :mail";
            $requete = $this -> bd -> prepare($sql);
            $requete -> bindParam('pseudo', $pseudo, PDO::PARAM_STR);
            $requete -> bindParam('mail', $mail, PDO::PARAM_STR);
            $requete -> execute();
            $message = $requete -> fetchAll();

            return $message[0][0];
        }

        function partie($id, $score) {
            $sql = "insert into partie (id_joueur, date_partie, score) values (:id, now(), :score)";
            $requete = $this -> bd -> prepare($sql);
            $requete -> bindParam('id', $id, PDO::PARAM_INT);
            $requete -> bindParam('score', $score, PDO::PARAM_INT);
            $requete -> execute();
        }
}