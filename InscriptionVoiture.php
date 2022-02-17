<!DOCTYPE html> 
 
<html> 
<head> 
<title>Redirection page Index</title> 
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
       
//Insérer des enregistrements dans une table (exemples d’un formulaire de contact) 
        $sql = "INSERT IGNORE INTO plaque_allow (Plaque,Nom) 
        VALUES ('$_POST[Plaque]','$_POST[Nom]')";

    }

//test si l’enregistrement est réussi 
    if ($conn->query($sql) === TRUE) { 
        echo "Nouvel enregistrement réussi "; }
        else { 
        echo "Erreur: " . $sql . "<br>" . $conn->error; 
    }
 
    header('Status: 301 Moved Permanently', false, 301);      
    header('Location: Index.php');      
    exit();      
    

?> 
</body> 
 
</html> 