<?php

$user = new UtilisateurManager();

echo "<div class='profil'>";
echo "<h4>".$user -> getProfile($_SESSION['id'])[0][0]."</h4>";
echo "<h4>".$user -> getProfile($_SESSION['id'])[0][1]."</h4>";
echo "<h4><u>Inscrit le :</u> ".$user -> getProfile($_SESSION['id'])[0][2]."</h4>";
echo "</div>";

$partie = $user -> partiesRecentes();

echo "<div class='commentaire'><p><u>Parties récentes :</u></p>";
echo "<table><tr>
        <th>Date</th>
        <th>Score</th>
    </tr>";
    foreach($partie as $parties) {
        echo "<tr>
                <td>".$parties[1]."  |</td>
                <td>".$parties[2]."</td>
            </tr>";
    }
echo "</table></div>";