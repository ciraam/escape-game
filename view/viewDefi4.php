<H3>ATTENTION ! Attaque ultime de l'IA en approche... Voici 3 attaques en même temps, réparez vite les failles !</H3>
<div class="container">
    <div class="boxImg1">
        <form method="post">
        <h2>N°1</h2>
            <img src="img/1defi4.png" alt="1Defi4">
        </form>
    </div>
    <div class="boxImg2">
        <form method="post">
        <h2>N°2</h2>
            <img src="img/2defi4.png" alt="2Defi4">
            <p>&</p>
            <img src="img/2.5defi4.png" alt="2.5Defi4">  
        </form>
    </div>
    <div class="boxImg3">
        <form method="post">
        <h2>N°3</h2>
            <img src="img/3defi4.png" alt="3Defi4">
        </form>
    </div>
</div>
<!-- <div class="container2"> -->
</br>
<u><h2 style="text-align: center">Correction des vulnérabilités</h2></u>
</br>
    <form class ="container2" method="post">
        <div class="box">
        <h3><u>Attaque n°1 :</u></h3>
            <input type="radio" id="sql" name="attaque" value="sql" />
            <label for="sql">Injection SQL</label>
            <input type="radio" id="session" name="attaque" value="session" />
            <label for="session">Manipulation de session</label>
            <input type="radio" id="csrf" name="attaque" value="csrf" />
            <label for="csrf">Attaques CSRF</label>
            <input type="radio" id="xss" name="attaque" value="xss" />
            <label for="xss">Attaques XSS</label>
            </br>
            <label for="solution">Solution :</label>
            <select name="solution" id="solution">
                <option value="">Liste choix, 2 réponses possibles mais l'une favorisée !</option>
                <option value="">-------------------------------------------------------------------------------</option>
                <option value=5>1) Session non-protégée, nécessite de revoir la sécurité</option>
                <option value=1>2) Requête non-protégée, nécessite bindParam</option>
                <option value=2>3) Renvoie de la requête non-filtrée, nécessite htmlspecialchars</option>
                <option value=3>4) Code PHP mal écrit, nécessite de revoir la sécurité</option>
                <option value=4>5) Code HTML mal écrit, nécessite de revoir la sécurité</option>
                <option value=6>6) Aucun des 5 choix, l'IA est trop forte...</option>
            </select>
        </div>

        <div class="box">
        <h3><u>Attaque n°2 :</u></h3>
            <input type="radio" id="sql" name="attaque2" value="sql" />
            <label for="sql">Injection SQL</label>
            <input type="radio" id="csrf" name="attaque2" value="csrf" />
            <label for="csrf">Attaques CSRF</label>
            <input type="radio" id="xss" name="attaque2" value="xss" />
            <label for="xss">Attaques XSS</label>
            <input type="radio" id="session" name="attaque2" value="session" />
            <label for="session">Manipulation de session</label>
            </br>
            <label for="solution2">Solution :</label>
            <select name="solution2" id="solution2">
                <option value="">Liste choix, 2 réponses possibles mais l'une favorisée !</option>
                <option value="">-------------------------------------------------------------------------------</option>
                <option value=4>1) Code HTML mal écrit, nécessite de revoir la sécurité</option>
                <option value=2>2) Renvoie de la requête non-filtrée, nécessite htmlspecialchars</option>
                <option value=3>3) Code PHP mal écrit, nécessite de revoir la sécurité</option>
                <option value=5>4) Session non-protégée, nécessite de revoir la sécurité</option>
                <option value=1>5) Requête non-protégée, nécessite bindParam</option>
                <option value=6>6) Aucun des 5 choix, l'IA est trop forte...</option>
            </select>
        </div>

        <div class="box">
        <h3><u>Attaque n°3 :</u></h3>
            <input type="radio" id="csrf" name="attaque3" value="csrf" />
            <label for="csrf">Attaques CSRF</label>
            <input type="radio" id="session" name="attaque3" value="session" />
            <label for="session">Manipulation de session</label>
            <input type="radio" id="xss" name="attaque3" value="xss" />
            <label for="xss">Attaques XSS</label>
            <input type="radio" id="sql" name="attaque3" value="sql" />
            <label for="sql">Injection SQL</label>
            </br>
            <label for="solution3">Solution :</label>
            <select name="solution3" id="solution3">
                <option value="">Liste choix, 2 réponses possibles mais l'une favorisée !</option>
                <option value="">-------------------------------------------------------------------------------</option>
                <option value=3>1) Code PHP mal écrit, nécessite de revoir la sécurité</option>
                <option value=1>2) Requête non-protégée, nécessite bindParam</option>
                <option value=5>3) Session non-protégée, nécessite de revoir la sécurité</option>
                <option value=2>4) Renvoie de la requête non-filtrée, nécessite htmlspecialchars</option>
                <option value=4>5) Code HTML mal écrit, nécessite de revoir la sécurité</option>
                <option value=6>6) Aucun des 5 choix, l'IA est trop forte...</option>
            </select>
        </div>

        <button style="font-size: 27px; margin-top: 15px; margin-left: 65px; border-radius: 11px" type="submit" name="bouton">Vérifier</button>
    </form>
<!-- </div> -->

<?php

$utilisateur = new DefiManager();
$log = new LogManager();

// if (isset($_POST['attaque']) && isset($_POST['attaque2']) && isset($_POST['attaque3']) && isset($_POST['solution']) && isset($_POST['solution2']) && isset($_POST['solution3'])) {
if (isset($_POST['bouton'])) {
    // if ($utilisateur -> checkForm($_POST['attaque'], $_POST['attaque2'], $_POST['attaque3'], $_POST['solution'], $_POST['solution2'], $_POST['solution3'])) {
        // header("Location: index.php?action=jeuFini&s=" . $utilisateur -> checkForm($_POST['attaque'], $_POST['attaque2'], $_POST['attaque3'], $_POST['solution'], $_POST['solution2'], $_POST['solution3']) . "");
        // exit(); 
        // header("Location: jeuFini");
        // $utilisateur -> checkForm($_POST['attaque'], $_POST['attaque2'], $_POST['attaque3'], $_POST['solution'], $_POST['solution2'], $_POST['solution3']);
        $score = $utilisateur -> checkForm($_POST['attaque'], $_POST['attaque2'], $_POST['attaque3'], $_POST['solution'], $_POST['solution2'], $_POST['solution3']);
        echo '<script>window.location.href="?action=jeuFini&s='.$score.'";</script>';
        // &s=' . $utilisateur -> checkForm($_POST['attaque'], $_POST['attaque2'], $_POST['attaque3'], $_POST['solution'], $_POST['solution2'], $_POST['solution3']) . 
        // exit();
    // }
}