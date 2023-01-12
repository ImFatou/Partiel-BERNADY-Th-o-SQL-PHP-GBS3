<?php
  //connexion a la base de données

  //récupération de l'id dans le lien

  //requête de suppression

  //redirection vers la page index.php




$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "theopartiel";

$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['button'])){
  
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $age=$_POST['age'];
}
$sql = "DELETE id, nom, prenom, age FROM theotable";
$result = $conn->query($sql);


?>