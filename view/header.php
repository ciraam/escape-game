<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<nav>
    <button onclick="window.location.href='?action=accueil'">Accueil</button>
    <?php
    
    if (empty($_SESSION['id'])) {
        $onclick = "'window.location.href='?action=connexion'";
        echo "<button onclick=$onclick>Connexion</button>";
    } else {
        $onclick = "'window.location.href='?action=profil'";
        echo "<button onclick=$onclick>Profil</button>";

        echo "<form method='post'><button type='submit' name='deconnexion'>Déconnexion</button></form>";
    }
    
    if (isset($_POST['deconnexion'])){
        $_SESSION['id'] = null;
        session_destroy();
        exit();
    }
    ?>
    </nav>