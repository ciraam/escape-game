<div class="container">
    <form  method="post">
        <h2>Connexion administrateur</h2>  
        <label for="identifiant">Nom d'utilisateur :</label> 
        <input type="text" id="identifiant" name="identifiant" required><br><br> 
        <label for="mdp">Mot de passe :</label> 
        <input type="password" id="mdp" name="mdp" required><br><br> 
        <button type="submit">Se connecter</button> 
    </form>
</div>

<?php

$utilisateur = new DefiManager();
$log = new LogManager();

if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {
    if ($utilisateur -> defi1($_POST['identifiant'], $_POST['mdp']) == true) {
        // echo "<p>S15M11</p>";
        echo $utilisateur -> defi1($_POST['identifiant'], $_POST['mdp']);
        echo "<p>Insérer le dans l'URL !</p>";
    } else {
        echo "Identifiant et/ou mot de passe erroné(s) !";
    }
    $log -> addLog("nouvelle tentative");
}