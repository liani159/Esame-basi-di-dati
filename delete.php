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


    if(isset($_POST["mat"]) && isset($_POST["cu"]) && isset($_POST["idBib"]) && isset($_POST["isbnId"])){
        if(!empty($_POST["mat"]) && !empty($_POST["cu"]) && !empty($_POST["idBib"]) && !empty($_POST["isbnId"])){
            echo $_POST["mat"].$_POST["cu"].$_POST["idBib"];
            $matricola = $_POST["mat"];
            $codiceUnivoco = $_POST["cu"];
            $idBiblio = $_POST["idBib"];
            $isbnId =  $_POST["isbnId"];

            // DISABLE THE FOREIGN KEY TO CANCEL DATA IN COPIA
            $disable = mysqli_query($link,"SET FOREIGN_KEY_CHECKS=0;");

            //re-inserisco la copia preso in prestito nella table COPIA 
            $insertEltCancellatiInCopia =  "INSERT INTO COPIA VALUES('$codiceUnivoco','$isbnId' ,1,'$idBiblio');";
            $inserimento = mysqli_query($link, $insertEltCancellatiInCopia);


            //E cancello il nolleggio fatto 
            $cancellazione = mysqli_query($link, "DELETE FROM NOLLEGGIA WHERE MATRICOLA='$matricola' AND CODICE_UNIVOCO='$codiceUnivoco'");

            // RE-ENABLE THE FOREIGN KEY
            $enable = mysqli_query($link,"SET FOREIGN_KEY_CHECKS=1;");

            echo "weel";          
        }
    }
    
?>