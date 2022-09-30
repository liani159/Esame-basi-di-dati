<?php
    include 'connexion.php';
    
    if(isset($_POST["delete_mat"])){
        echo $_POST["delete_mat"];
        $matricule = $_POST["delete_mat"];
        $delete=0;
        $delete = "DELETE FROM STUDENTE WHERE MATRICOLA='$matricule'";
        echo "weel";
        if(mysqli_query($link,$delete)){
            echo '<script> alert("JavaScript Alert Box by PHP") <script>';
            echo "good";
        }
        else{  
            echo "Error";
            
        }
    }
    
?>