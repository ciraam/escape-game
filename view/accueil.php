<body>
    <h1>EscAIpe game</h1>

    <p>Bienvenue sur notre escape game, dans cet escape game vous serez pris au piège par une IA qui maitrise 
        chaque recoin de votre système, qu'elle va bien évidemment se faire un malin plaisir d'infecter.</p> 
    <p>Votre seule chance de la contrer résidera dans votre capacité à résoudre une série de défis qu'elle 
        vous lance, estimez-vous heureux qu'elle soit joueuse !</p>

    <a style = "font-size:22px" href="index.php?action=inscription">Défi 1</a>
    <!-- <a href="index.php?code=S15M11">Défi 2</a> -->
    <!-- <a href="index.php?code=R20M09">Défi 1</a> -->

    <?php

    $user = new UtilisateurManager();
    $user -> utilisateursRecents();
    // var_dump($user -> utilisateursRecents());
    echo "<div class='box'><p><u>Utilisateurs récents :</u></p>";
    echo "<table><tr>
            <th>Pseudo</th>
            <th>Date</th>
        </tr>";
        foreach($user -> utilisateursRecents() as $users) {
            echo "<tr>
                    <td>".$users[0]."  |</td>
                    <td>".$users[1]."</td>
                </tr>";
        }
    echo "</table></div>";

