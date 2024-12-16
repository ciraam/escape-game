<div class="box"> 
    <form method="post">
    <h2>Accès confidentiel</h2>
        <label for="mdp">Entrez le code en clair correspondant :</label>
        <input type="text" id="mdp" name="mdp" placeholder="702f48d73e3b179ae40b7e54589c55222a07ce3d">
        <button type="submit">Déverrouiller</button>
    </form>
</div>

<?php

if ($_POST['mdp'] != null) {
    if ('702f48d73e3b179ae40b7e54589c55222a07ce3d' == hash('sha1', $_POST['mdp'])) {
        echo "<p>Bien joué ! Voici le code : F24M12</p>";
        echo "<p>Insérer le dans l'URL !</p>";
    } 
}