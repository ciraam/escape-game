<link rel="stylesheet" href="style.css">

<?php

session_start();

require_once("class/defi.php");
require_once("class/TESTprojetgalice.php");
require_once("class/log.php");

if(isset($_GET['code'])){
    if ($_GET["code"] == "R20M09"){
        $title = "Défi 1";
        require_once("view/header.php");
        require_once("view/viewDefi1.php");
    }
    if ($_GET["code"] == "S15M11"){
        $title = "Défi 2";
        require_once("view/header.php");
        require_once("view/viewDefi2.php");
    }
    // if ($_GET["code"] == ""){
    //     $title = "Défi 3";
    //     require_once("view/defi3.php");
    // }
    // if ($_GET["code"] == ""){
    //     $title = "Défi 4";
    //     require_once("view/defi4.php");
    // }
}
else {
    $title = "Escape Game";
    require_once("view/header.php");
    require_once("view/accueil.php");
    // require_once("view/testPROJETGALICE.php"); 
}

require_once("view/footer.php");

?>