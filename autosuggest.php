<?php 

include "connexion.php";

if(isset($_POST['search'])){
    $search = mysqli_real_escape_string($link,$_POST['search']);

    $query = "SELECT * FROM AUTORI WHERE NOME REGEXP '^$search'";
    $result = mysqli_query($link,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("label"=>$row['NOME']);
        //$response[] = array("value"=>$row['COGNOME'],"label"=>$row['NOME']);
    }
     
    echo json_encode($response);
}

exit;
?>