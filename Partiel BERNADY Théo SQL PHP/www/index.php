<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
        <a href="modifier.php" class="Btn_add"> <img src="images/edit.png"> Modifier</a>
        <a href="supprimer.php" class="Btn_add"> <img src="images/trash.png"> Supprimer</a>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>




    </div>
</body>

</html>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "theopartiel";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT id, nom, prenom, age FROM theotable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher les résultats de chaque ligne
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " - prénom: " . $row["prenom"]. " - age: " . $row["age"]. "<br>";
    }
  }

?>