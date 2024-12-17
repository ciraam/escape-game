<form method="post">
    <h2>Inscription</h2>
    <p>Cette inscription est obligatoire si vous voulez faire le jeu, afin de permettre un suivi des scores</p>
    <input type="text" name="pseudo"placeholder="Pseudo" required></br></br>
    <input type="email" name="mail" placeholder="Adresse mail" required></br></br>
    <button type="submit">S'inscrire</button>
</form>

<?php

if (isset($_POST['pseudo']) && isset($_POST['mail'])) {
    $utilisateur = new UtilisateurManager();
    if ($utilisateur -> inscription($_POST['pseudo'], $_POST['mail']) == true) {
        echo "<script>alert('Inscription réussite ! Cliquez sur le lien donné pour accéder au jeu')</script>";
        echo '<a style = "font-size:33px" href="index.php?code=R20M09">Défi 1</a>';

        $_SESSION ['id'] = $utilisateur -> getId($_POST['pseudo'], $_POST['mail']);
        
    } else {
        echo "<p style='color:red'>Une erreur est survenue lors de l'inscription</p>";
    }
    
}