<link rel="stylesheet" href="style.css">

<?php

session_start();

require_once("class/defi.php");
require_once("class/utilisateur.php");
require_once("class/log.php");

if(isset($_GET['code'])){
    if ($_GET["code"] == "R20M09"){
        $title = "Défi 1";
        require_once("view/header.php");
        require_once("view/viewDefi1.php");
    }
    if ($_GET["code"] == "S15M18"){
        $title = "Défi 2";
        require_once("view/header.php");
        require_once("view/viewDefi2.php");
    }
    if ($_GET["code"] == "J03M10"){
        $title = "Défi 3";
        require_once("view/header.php");
        require_once("view/viewDefi3.php");
    }
    if ($_GET["code"] == "F24M12"){
        $title = "Défi 4";
        require_once("view/header.php");
        require_once("view/viewDefi4.php");
    }
}
// else {
//     $title = "Escape Game";
//     require_once("view/header.php");
//     require_once("view/accueil.php");
// }

if(isset($_GET['action'])){
    if ($_GET["action"] == "accueil"){
        $title = "Inscription";
        require_once("view/header.php");
        require_once("view/accueil.php");
    }
    if ($_GET["action"] == "inscription"){
        $title = "Inscription";
        require_once("view/header.php");
        require_once("view/inscription.php");
    }
    if ($_GET["action"] == "profil"){
        $title = "Votre profil";
        require_once("view/header.php");
        require_once("view/profil.php");
    }
    if ($_GET["action"] == "jeuFini"){
        $title = "Fin";
        require_once("view/header.php");
        require_once("view/jeuFini.php");
    }
}
// else {
//     $title = "Escape Game";
//     require_once("view/header.php");
//     require_once("view/accueil.php");
// }

require_once("view/footer.php");

?>