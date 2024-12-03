<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualisation des Tableaux</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Visualisation des Tableaux</h1>
    <?php
    function renderTable($data, $title) {
    echo "<h2>$title</h2>";
    echo "<table border='1'>";
    echo "<thead><tr>";
    foreach (array_keys($data[0]) as $key) {
        echo "<th>$key</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

// Exemple d'appel
$test = new testProjet(); // Instancie ta classe
$leaderBoardGeneral = $test->getLeaderBoardGeneral();
renderTable($leaderBoardGeneral, "Leaderboard General");
    // renderTable($scoresUser, "Tableau des Scores des Utilisateurs (scoresUser)");
    ?>
</body>
</html>
