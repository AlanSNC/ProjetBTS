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
    
   /* function updatePlaque($Nom)
 {
 global $conn;
 $data = json_decode(file_get_contents("php://input"),true);
 $Plaque = $data["Plaque"];
 $query="UPDATE plaque_allow SET Plaque='".$Plaque."' WHERE Nom=".$Nom;
 if(mysqli_query($conn, $query))
 {
 $response=array(
 'status' => 1,
 'status_message' =>'plaque_allow updated with success.'
 );
 }
 else
 {
 $response=array(
 'status' => 0,
 'status_message' =>'Failure with the plaque_allow update'.
mysqli_error($conn)
);}
 }

updatePlaque(Test);*/

    function getPlaque()
 {
 global $conn;
 $query = "SELECT * FROM plaque_allow";
 $response = array();
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 {
 $response[] = $row;
 }
 header('Content-Type: application/json');
 echo json_encode($response, JSON_PRETTY_PRINT);
 }

    ?>
