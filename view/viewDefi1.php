<h2>Connexion administrateur</h2> 
<form method="post"> 
    <label for="identifiant">Nom d'utilisateur :</label> 
    <input type="text" id="identifiant" name="identifiant" required><br><br> 
    <label for="mdp">Mot de passe :</label> 
    <input type="password" id="mdp" name="mdp" required><br><br> 
    <button type="submit">Se connecter</button> 
</form>

<?php

$utilisateur = new DefiManager();
$log = new LogManager();

if (isset($_POST['identifiant'])) {
    if ($utilisateur -> defi1($_POST['identifiant'])) {
        echo "<p>Insérer le dans l'URL !</p>";
    } else {
        echo "Identifiant et/ou mot de passe erroné(s) !";
    }
    $log -> addLog("nouvelle tentative");
}