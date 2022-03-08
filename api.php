<?php
$con = mysqli_connect("192.168.5.64", "root","","parking");
$response=array();
if($con){   
    $sql = "select * from plaque_allow";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc ($result)){
            $response[$i]['Id_plaque'] = $row ['Id_plaque'];
            $response[$i]['Plaque'] = $row ['Plaque'];
            $response[$i]['Nom'] = $row ['Nom'];
            $response[$i]['Register_tmp'] = $row ['Register_tmp'];
            $i++;}
                                 
        echo json_encode($response, JSON_PRETTY_PRINT);}

        }
else{
    echo "DataBase connection failed";}
    


    function getPlaqueByName($Nom=0)
{
global $conn;
$query = "SELECT * FROM Plaque_allow";
if($ID != 0){
    $query .= " WHERE Nom=".$Nom." LIMIT 1";
}
$response = array();
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
    $response[] = $row;
}
header('Content-Type: application/json');
 }

 getPlaque();
 getPlaqueByName(Test);

    ?>
