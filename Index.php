<!DOCTYPE html> 
 
<html> 
<head> 
<title>Index Voitures Autorisées</title> 
<meta charset=”utf-8”> 
</head> 
 
<body> 
<?php 

// Connexion a la BDD
$servername = "localhost";              //Si on veut prendre une pase de donnée de ce pc sinon 127.0.0.1
$username = "root";         
$password = ""; 
$dbname = "parking"; 


// Connexion à la base de données 
$conn = new mysqli($servername, $username, $password, $dbname);         //Sert a localiser la base

// Test de la connexion. 
if ($conn->connect_error) { 
    die("Echec de la connexion: " . $conn->connect_error); 
}
    else{
        echo "Bonjour<br><br>";
       
        $sql = "SELECT Nom,Plaque,Register_tmp FROM plaque_allow";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // Lecture de chaque enregistrement de la table
         while($row = $result->fetch_assoc()) {
         echo "Propriétaire de la voiture: " . $row["Nom"]. " "."Plaque de la voiture: " . $row["Plaque"]." "."Heure de l'enregistrements: " . $row["Register_tmp"]."". "<br><br>";
         }
        }} 
    ?>
    
    <a href="InscriptionVoiture.html">Votre voiture n'est pas autorisée? Cliquez ici pour vous inscrire.</a>
</body> 
 
</html> 