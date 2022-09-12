<?php

    $link = mysqli_connect("127.0.0.1", "liani", "password", "Biblio");
    $flag = 1;
    $flagUtenti = 1;
    if(!$link){
        echo "si è verificato un errore durante la connessione al DB <br/>";
        echo "codice errore: ". mysqli_connect_errno(). "<br/>";
        echo "Messaggio errore: ". mysqli_connect_error() ."<br/>";
        exit;
    }

    //$dati = json_decode($_POST["dati"], true);

    //Parte Libro
    if(isset($_POST["titolo"])||isset($_POST["nome"])){
        $titolo = $_POST["titolo"];
        $autore = $_POST["nome"];
        //we will use a flag here to control it

        if(empty($_POST["titolo"]) && empty($_POST["nome"])){

            //if we write nothing it print all book info

            $bothElementQuery = "SELECT TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, ID_BIBLIOTECA  FROM LIBRI ";
               $esecuzioneLibri = mysqli_query($link,$bothElementQuery);


               echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
               <tr>
                   <th> TITOLO </th>
                   <th> ISBN_ID </th>
                   <th> ISBN </th>
                   <th> LINGUA </th>
                   <th> ANNO_PUB </th>
                   <th> ID_BIBLIOTECA </th>
                   
               </tr>";
   
               while($row = mysqli_fetch_array($esecuzioneLibri, MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo "<td>" . $row["TITOLO"]. "</td>";
                    //echo "<td>" . $autore. "</td>";
                    echo "<td>" . $row["ISBN_ID"]. "</td>";
                    echo "<td>" . $row["ISBN"]. "</td>";
                    echo "<td>" . $row["LINGUA"]. "</td>";
                    echo "<td>" . $row["ANNO_PUB"]. "</td>";
                    echo "<td>" . $row["ID_BIBLIOTECA"]. "</td>";
                    echo "</tr>";
               }
               
               echo "</table>";
        }


        //if we enter both titolo and Scritto da
        if(!empty($_POST["titolo"]) && !empty($_POST["nome"])){
               $flag = 0;
            $bothElementQuery = "SELECT  TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, ID_BIBLIOTECA
                FROM LIBRI WHERE TITOLO='$titolo'
                AND ISBN_ID IN (
                SELECT ISBN_ID FROM SCRITTO_DA
                WHERE(AUTORI_ID=(SELECT AUTORI_ID FROM AUTORI
                WHERE NOME='$autore')));";
               $esecuzioneLibri = mysqli_query($link,$bothElementQuery);


            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
            <tr>
                <th> TITOLO </th>
                <th> ISBN_ID </th>
                <th> ISBN </th>
                <th> LINGUA </th>
                <th> ANNO_PUB </th>
                <th> ID_BIBLIOTECA </th>
                
            </tr>";

            while($row = mysqli_fetch_array($esecuzioneLibri, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>" . $row["TITOLO"]. "</td>";
                echo "<td>" . $row["ISBN_ID"]. "</td>";
                echo "<td>" . $row["ISBN"]. "</td>";
                echo "<td>" . $row["LINGUA"]. "</td>";
                echo "<td>" . $row["ANNO_PUB"]. "</td>";
                echo "<td>" . $row["ID_BIBLIOTECA"]. "</td>";
                echo "</tr>";
            }
            
            echo "</table>";

            
        }
        if($flag){
        //if(isset($_POST["titolo"])){
            $titolo = $_POST["titolo"];
            if(!empty($titolo)){
                echo "Titolo: ".$titolo."\n";
            
                $titoloQuery = "SELECT TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, ID_BIBLIOTECA  FROM LIBRI WHERE TITOLO='$titolo'";
                $esecuzioneLibro = mysqli_query($link,$titoloQuery);
 
             echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
             <tr>
                 <th> TITOLO </th>
                 <th> ISBN_ID </th>
                 <th> ISBN </th>
                 <th> LINGUA </th>
                 <th> ANNO_PUB </th>
                 <th> ID_BIBLIOTECA </th>
                 
             </tr>";
 
             while($row = mysqli_fetch_array($esecuzioneLibro, MYSQLI_ASSOC)){
                 echo "<tr>";
                 echo "<td>" . $row["TITOLO"]. "</td>";
                 echo "<td>" . $row["ISBN_ID"]. "</td>";
                 echo "<td>" . $row["ISBN"]. "</td>";
                 echo "<td>" . $row["LINGUA"]. "</td>";
                 echo "<td>" . $row["ANNO_PUB"]. "</td>";
                 echo "<td>" . $row["ID_BIBLIOTECA"]. "</td>";
                 echo "</tr>";
             }
             
             echo "</table>";
            }
        }
        if($flag){
        //if(isset($_POST["nome"])){
            $autore = $_POST["nome"];
            if(!empty($autore)){
                echo "\n";

                $queryNome = "SELECT TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, ID_BIBLIOTECA FROM LIBRI 
                WHERE(ISBN_ID IN (
                SELECT ISBN_ID FROM SCRITTO_DA
                WHERE(AUTORI_ID=(SELECT AUTORI_ID FROM AUTORI
                WHERE NOME='$autore'))))";

            $resultAutLibri = mysqli_query($link,$queryNome);

            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
            <tr>
                <th> TITOLO </th>
                <th> ISBN_ID </th>
                <th> ISBN </th>
                <th> LINGUA </th>
                <th> ANNO_PUB </th>
               // <th> ID_BIBLIOTECA </th> 
                
            </tr>";

            while($row = mysqli_fetch_array($resultAutLibri, MYSQLI_ASSOC)){
                echo "<tr>";
            echo "<td>" . $row["TITOLO"]. "</td>";
            echo "<td>" . $row["ISBN_ID"]. "</td>";
            echo "<td>" . $row["ISBN"]. "</td>";
            echo "<td>" . $row["LINGUA"]. "</td>";
            echo "<td>" . $row["ANNO_PUB"]. "</td>";
            echo "<td>" . $row["ID_BIBLIOTECA"]. "</td>";
            echo "</tr>";
            }
            
            echo "</table>";

                }

            }
    
    }


    // Parte Autori
    if(isset($_POST["author"])){
        $author = $_POST["author"];
        if(!empty($author)){
            echo "Autore: ".$author."\n";
            $queryDatiAut = "SELECT NOME, COGNOME, AUTORI_ID, DATA_NASCITA, LDN
            FROM AUTORI
            WHERE NOME='$author'";

            $resultAutDati = mysqli_query($link,$queryDatiAut);

            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
            <tr>
                <th> NOME </th>
                <th> COGNOME </th>
                <th> AUTORE_ID </th>
                <th> DATA NASCITA </th>
                <th> LUOGO NASCITA </th>
            </tr>";

            while($row = mysqli_fetch_array($resultAutDati, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>" . $row["NOME"]. "</td>";
                echo "<td>" . $row["COGNOME"]. "</td>";
                echo "<td>" . $row["AUTORI_ID"]. "</td>";
                echo "<td>" . $row["DATA_NASCITA"]. "</td>";
                echo "<td>" . $row["LDN"]. "</td>";
                echo "</tr>";
            }
                  
            echo "</table>";

        }/* 
        else{
            echo "all authors information";
            // we print all the authors name here
        }  */  
    
    }


    //Parte utenti/Studenti

    if(isset($_POST["from"]) && isset($_POST["from"])){
        $from = $_POST["from"];
        $to = $_POST["to"];

        if(!empty($_POST["from"]) && !empty($_POST["to"])){

            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
            <tr>
                <th> From </th>
                <th> To </th>
                
            </tr>";

            echo "<tr>";
            echo "<td>" . $from. "</td>";
            echo "<td>" . $to. "</td>";
            echo "</tr>";
            echo "</table>";
            //here we write the query 
            
        }

        else{
           
         //here we write the query 
         echo "We print all prestiti.";
         
     }
    
    }



    //Parte Storico
    if(isset($_POST["studente"])){
        $studente = $_POST["studente"];
        $biblio = $_POST["value"];
        //we will use a flag here to control it
        if(!empty($_POST["studente"]) && !empty($_POST["value"])){
               //$flag = 0;
               //echo"true";
               //echo "\n";
            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
            <tr>
                <th> nome Studente </th>
                <th> biblioteca </th>
                
            </tr>";

            echo "<tr>";
            echo "<td>" . $studente. "</td>";
            echo "<td>" . $biblio. "</td>";
            echo "</tr>";
            echo "</table>";
            //here we write the query 
            
        }

        if(!empty($_POST["studente"]) && empty($_POST["value"])){
            //$flag = 0;
            //echo"true";
            echo "\n";
         echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
         <tr>
             <th>  nome Studente </th>
             <th> data nascita </th>
             
         </tr>";

         echo "<tr>";
         echo "<td>" . $studente. "</td>";
         echo "<td>" . "29/06/2022". "</td>";
         echo "</tr>";
         echo "</table>";
         //here we write the query 
         
     }
    
    }

    //Parte Statistiche
    if(isset($_POST["studente"])){
        $stats = $_POST["stat"];
        //we will use a flag here to control it
        if(!empty($_POST["studente"])){
               //$flag = 0;
               //echo"true";
               //echo "\n";
            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
            <tr>
                <th> nome Studente </th>
                <th> biblioteca </th>
                
            </tr>";

            echo "<tr>";
            echo "<td>" . $studente. "</td>";
            echo "<td>" . $biblio. "</td>";
            echo "</tr>";
            echo "</table>";
            //here we write the query 
            
        }

        if(!empty($_POST["studente"]) && empty($_POST["value"])){
            //$flag = 0;
            //echo"true";
            echo "\n";
         echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
         <tr>
             <th>  nome Studente </th>
             <th> data nascita </th>
             
         </tr>";

         echo "<tr>";
         echo "<td>" . $studente. "</td>";
         echo "<td>" . "29/06/2022". "</td>";
         echo "</tr>";
         echo "</table>";
         //here we write the query 
         
     }
    
    }

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Biblioteche</title>
</head>
<body>

</body>
</html>