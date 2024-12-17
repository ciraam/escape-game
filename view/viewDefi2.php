<?php

$admin = new DefiManager();
$commentaires = $admin -> showCommentDefi2();

echo "<div class='container-com'> <div class='commentaire'> <h2>Commentaires</h2>";
foreach ($commentaires as $commentaire) {
    echo "<p><strong>" . $commentaire['pseudo'] . " </strong> | (" . $commentaire['mail'] . ") : " . $commentaire['commentaire'] . " | " . $commentaire['date'] . "</p>";
}

echo "</div>";

?>

<div class="commentaire">
    <form method="post">
    <h2>Espace commentaire</h2>
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required></br></br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required></br></br>
        <label for="comment">Commentaire :</label>
        <textarea id="comment" name="comment" rows="5" placeholder="Écrivez votre commentaire ici..." required></textarea></br></br>
        <button type="submit">Soumettre</button>
    </form>
</div>
</div>
<?php

$utilisateur = new DefiManager();

if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['comment'])) {
    if ($utilisateur -> defi2($_POST['pseudo'], $_POST['email'], $_POST['comment']) == true) {
        header("Refresh:0");
        echo "<script> alert('Bien joué ! Voici le code : J03M10'); </script>";
        echo "<p>Code : J03M10, à insérer dans l'URL !</p>";
    }
}

?>