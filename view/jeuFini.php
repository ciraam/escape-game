<strong>
<?php

if ($_GET['s'] <= 3) {
    echo "<p>L'IA a eu raison de vous ... Perdu !</p>";
} else if ($_GET['s'] <= 6 && $_GET['s'] > 3) {
    echo "<p>Ni vous ni l'IA avez gagné ... Match nul !</p>";
} else if ($_GET['s'] <= 9 && $_GET['s'] > 6) {
    echo "<p>Super ! Vous avez vaincu l'IA, mais pas sans égratignures ...</p>";
} else if ($_GET['s'] > 9) {
    echo "<p>Bravo ! Vous avez vaincu l'IA (dé)générative !</p>";
}

echo "<p><u>Votre score :</u> " . $_GET['s'] . "/12</p>";

$user = new UtilisateurManager();
$user -> partie($_SESSION['id'], $_GET['s']);

?>
</strong>
<img style=" display : center" src="img/ia-fin.gif" alt="ia-fin" />