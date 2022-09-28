<?php

    $link = mysqli_connect("127.0.0.1", "liani", "password", "Biblioteca");
    $flag = 1;
    $flag2 = 1;
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

            $bothElementQuery = "SELECT TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, NUM_COPIE  FROM LIBRI ";
               $esecuzioneLibri = mysqli_query($link,$bothElementQuery);


               echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
               <tr>
                   <th> TITOLO </th>
                   <th> ISBN_ID </th>
                   <th> ISBN </th>
                   <th> LINGUA </th>
                   <th> ANNO_PUB </th>
                   <th> NUMERO COPIE </th>
                   
               </tr>";
   
               while($row = mysqli_fetch_array($esecuzioneLibri, MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo "<td>" . $row["TITOLO"]. "</td>";
                    //echo "<td>" . $autore. "</td>";
                    echo "<td>" . $row["ISBN_ID"]. "</td>";
                    echo "<td>" . $row["ISBN"]. "</td>";
                    echo "<td>" . $row["LINGUA"]. "</td>";
                    echo "<td>" . $row["ANNO_PUB"]. "</td>";
                    echo "<td>" . $row["NUM_COPIE"]. "</td>";
                    echo "</tr>";
               }
               
               echo "</table>";
        }


        //if we enter both titolo and Scritto da
        if(!empty($_POST["titolo"]) && !empty($_POST["nome"])){
               $flag = 0;
            $bothElementQuery = "SELECT  TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, NUM_COPIE
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
                <th> NUMERO COPIE </th>
                
            </tr>";

            while($row = mysqli_fetch_array($esecuzioneLibri, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>" . $row["TITOLO"]. "</td>";
                echo "<td>" . $row["ISBN_ID"]. "</td>";
                echo "<td>" . $row["ISBN"]. "</td>";
                echo "<td>" . $row["LINGUA"]. "</td>";
                echo "<td>" . $row["ANNO_PUB"]. "</td>";
                echo "<td>" . $row["NUM_COPIE"]. "</td>";
                echo "</tr>";
            }
            
            echo "</table>";

            
        }
        if($flag){
        //if(isset($_POST["titolo"])){
            $titolo = $_POST["titolo"];
            if(!empty($titolo)){
                // echo "Titolo: ".$titolo."\n";
            
                $titoloQuery = "SELECT TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, NUM_COPIE  FROM LIBRI WHERE TITOLO='$titolo'";
                $esecuzioneLibro = mysqli_query($link,$titoloQuery);
 
             echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
             <tr>
                 <th> TITOLO </th>
                 <th> ISBN_ID </th>
                 <th> ISBN </th>
                 <th> LINGUA </th>
                 <th> ANNO_PUB </th>
                 <th> NUMERO COPIE </th>
                 
             </tr>";
 
             while($row = mysqli_fetch_array($esecuzioneLibro, MYSQLI_ASSOC)){
                 echo "<tr>";
                 echo "<td>" . $row["TITOLO"]. "</td>";
                 echo "<td>" . $row["ISBN_ID"]. "</td>";
                 echo "<td>" . $row["ISBN"]. "</td>";
                 echo "<td>" . $row["LINGUA"]. "</td>";
                 echo "<td>" . $row["ANNO_PUB"]. "</td>";
                 echo "<td>" . $row["NUM_COPIE"]. "</td>";
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

                $queryNome = "SELECT TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, NUM_COPIE FROM LIBRI 
                WHERE(ISBN_ID IN (
                SELECT ISBN_ID FROM SCRITTO_DA
                WHERE(AUTORI_ID=(SELECT AUTORI_ID FROM AUTORI
                WHERE NOME='$autore'))))
                ORDER BY ANNO_PUB";

            $resultAutLibri = mysqli_query($link,$queryNome);

            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
            <tr>
                <th> TITOLO </th>
                <th> ISBN_ID </th>
                <th> ISBN </th>
                <th> LINGUA </th>
                <th> ANNO_PUB </th>
                <th> NUMERO COPIE </th> 
                
            </tr>";

            while($row = mysqli_fetch_array($resultAutLibri, MYSQLI_ASSOC)){
                echo "<tr>";
            echo "<td>" . $row["TITOLO"]. "</td>";
            echo "<td>" . $row["ISBN_ID"]. "</td>";
            echo "<td>" . $row["ISBN"]. "</td>";
            echo "<td>" . $row["LINGUA"]. "</td>";
            echo "<td>" . $row["ANNO_PUB"]. "</td>";
            echo "<td>" . $row["NUM_COPIE"]. "</td>";
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
    // Inserire Studente
    if(isset($_POST["nomeStudente"]) && isset($_POST["cognomeStudente"]) && isset($_POST["matricola"]) && isset($_POST["telefono"]) && isset($_POST["indirizzo"]) ){
        $nomeStudente = $_POST["nomeStudente"];
        $cognomeStudente = $_POST["cognomeStudente"];
        $matricola = $_POST["matricola"];
        $telefono = $_POST["telefono"];
        $indirizzo = $_POST["indirizzo"];
        echo $nomeStudente;

        if(!empty($_POST["nomeStudente"]) && !empty($_POST["cognomeStudente"]) && !empty($_POST["matricola"])
        && !empty($_POST["telefono"]) && !empty($_POST["indirizzo"])){

            //here we write the query 
            $queryInsertStudente = "INSERT INTO STUDENTE VALUES('$matricola', '$nomeStudente', '$cognomeStudente',
             '$indirizzo', '$telefono')";


            $resultInsert = mysqli_query($link,$queryInsertStudente);
            if(!$resultInsert){
                echo "Problema nell'inserimento dello studente";
            }
            else{
                echo "Succesfully inserted";
            }
            
        }

        else{
           
         //here we write the query 
         echo "Devi compilare tutti i campi";
         
     }
    
    }

    // Ricerca Studente
    if(isset($_POST["nomeStud"])){
        $nomeStud = $_POST["nomeStud"];

        if(!empty($nomeStud)){
            $queryRicercaStudente = "SELECT * FROM STUDENTE WHERE NOME='$nomeStud'";
            $resultRicerca = mysqli_query($link,$queryRicercaStudente);
 
             echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
             <tr>
                 <th> NOME </th>
                 <th> COGNOME </th>
                 <th> MATRICOLA </th>
                 <th> TELEFONO </th>
                 <th> INDIRIZZO </th>             
             </tr>";
 
             while($row = mysqli_fetch_array($resultRicerca, MYSQLI_ASSOC)){
                 echo "<tr>";
                 echo "<td>" . $row["NOME"]. "</td>";
                 echo "<td>" . $row["COGNOME"]. "</td>";
                 echo "<td>" . $row["MATRICOLA"]. "</td>";
                 echo "<td>" . $row["TELEFONO"]. "</td>";
                 echo "<td>" . $row["INDIRIZZO"]. "</td>";
                 echo "</tr>";
             }
             
             echo "</table>";
        }

        else {
           // we print all student of the library
         //here we write the query 
            $queryRicercaStudente = "SELECT * FROM STUDENTE";
            $resultRicerca = mysqli_query($link,$queryRicercaStudente);
 
             echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
             <tr>
                 <th> NOME </th>
                 <th> COGNOME </th>
                 <th> MATRICOLA </th>
                 <th> TELEFONO </th>
                 <th> INDIRIZZO </th>             
             </tr>";
 
             while($row = mysqli_fetch_array($resultRicerca, MYSQLI_ASSOC)){
                 echo "<tr>";
                 echo "<td>" . $row["NOME"]. "</td>";
                 echo "<td>" . $row["COGNOME"]. "</td>";
                 echo "<td>" . $row["MATRICOLA"]. "</td>";
                 echo "<td>" . $row["TELEFONO"]. "</td>";
                 echo "<td>" . $row["INDIRIZZO"]. "</td>";
                 echo "</tr>";
             }
             
             echo "</table>";
         
     }
    
    }
    // ENd Ricerca


    //Parte Nolleggi
    // ne pas oublier de controller si le matricule qui
    //veut louer le livre correspond avec celui d un etudiant dans la BD
    if(isset($_POST["matricolaStudente"]) && isset($_POST["titoloLibro"])
        && isset($_POST["dataPrestito"])){
        $matricolaStudente = $_POST["matricolaStudente"];
        $titoloLibro = $_POST["titoloLibro"];
        $dataPrestito = $_POST["dataPrestito"];
        //we will use a flag here to control it
        if(!empty($_POST["matricolaStudente"]) && !empty($_POST["titoloLibro"])
            && !empty($_POST["dataPrestito"])){
               
            //here we write the query 
            $queryNolleggio = "INSERT INTO NOLLEGGIA(MATRICOLA, CODICE_UNIVOCO, ISBN_ID, ID_BIBLIOTECA,
                DATA_USCITA, DATA_RITORNO)
                SELECT (SELECT MATRICOLA FROM STUDENTE
                    WHERE MATRICOLA='$matricolaStudente') , 
                    C.CODICE_UNIVOCO CODICE_UNIVOCO, C.ISBN_ID ISBN_ID,
                    C.ID_BIBLIOTECA ID_BIBLIOTECA, '$dataPrestito', '$dataPrestito'+interval 30 day
                FROM COPIA C
                LEFT JOIN LIBRI L
                    ON C.ISBN_ID=L.ISBN_ID
                WHERE L.TITOLO='$titoloLibro'
                limit 1;";

                // CANCELLO LA COPIA PER EVITARE DI NOLLEGGIARE LA STESSA
                $queryCancellazioneCopi=0;


            $resultNolleggio = mysqli_query($link,$queryNolleggio);
            
            if(!$resultNolleggio){
                echo "Problema nell'inserimento dello studente";
            }
            else{
                echo "You've succefully rented the book :".$titoloLibro." ";

            }
            
        }

    
    }


    //Parte Visualizza storico
    if(isset($_POST["matSt"]) && isset($_POST["from"]) && isset($_POST["to"])){
        $matSt = $_POST["matSt"];
        $from = $_POST["from"];
        $to= $_POST["to"];
        
        if((strcmp($matSt, "*")==0) && empty($_POST["from"]) && empty($_POST["to"])){
            $flag2 = 0;
            $queryPrintStoricoAll = "SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
                    N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
                FROM NOLLEGGIA N
                LEFT JOIN  STUDENTE S
                   ON S.MATRICOLA= N.MATRICOLA
                LEFT JOIN LIBRI L
                   ON N.ISBN_ID = L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA;";
           $resultStoricoAll = mysqli_query($link,$queryPrintStoricoAll);
            
               echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
               <tr>
                   <th> NOME </th>
                   <th> COGNOME </th>
                   <th> TIT LIBRO </th>
                   <th> MATRICOLA </th>  
                   <th> BILIOTECA_IMPEGNATA </th> 
                   <th> DATA_USCITA </th> 
                   <th> DATA_RITORNO </th>          
               </tr>";
   
               while($row = mysqli_fetch_array($resultStoricoAll, MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>" . $row["NOME"]. "</td>";
                   echo "<td>" . $row["COGNOME"]. "</td>";
                   echo "<td>" . $row["TITOLO"]. "</td>";
                   echo "<td>" . $row["MATRICOLA"]. "</td>";
                   echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                   echo "<td>" . $row["DATA_USCITA"]. "</td>";
                   echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                   echo "</tr>";
               }
               
               echo "</table>";
         
        } 
        
        //to check this query question
         if(!empty($_POST["matSt"]) && !empty($_POST["from"]) && !empty($_POST["to"])&& (strcmp($matSt, "*")!=0)){
            // we search the history of the in a precise range of date
            $storicoSingoloRange = "SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
            N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
               FROM NOLLEGGIA N
               LEFT JOIN  STUDENTE S
                   ON S.MATRICOLA= N.MATRICOLA
               LEFT JOIN LIBRI L
                    ON N.ISBN_ID = L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
                WHERE N.DATA_USCITA >='$from' AND N.DATA_RITORNO <= '$to'
                    AND N.MATRICOLA='$matSt';";
           $resultStoricoSingoloRange = mysqli_query($link,$storicoSingoloRange);
   
               echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
               <tr>
                   <th> NOME 12 </th>
                   <th> COGNOME </th>
                   <th> TIT LIBRO </th>
                   <th> MATRICOLA </th>   
                   <th> BILIOTECA_IMPEGNATA </th>
                   <th> DATA_USCITA </th> 
                   <th> DATA_RITORNO </th>          
               </tr>";
   
               while($row = mysqli_fetch_array($resultStoricoSingoloRange, MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>" . $row["NOME"]. "</td>";
                   echo "<td>" . $row["COGNOME"]. "</td>";
                   echo "<td>" . $row["TITOLO"]. "</td>";
                   echo "<td>" . $row["MATRICOLA"]. "</td>";
                   echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                   echo "<td>" . $row["DATA_USCITA"]. "</td>";
                   echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                   echo "</tr>";
               }
               
               echo "</table>";
         
        }

        if(empty($_POST["matSt"]) && !empty($_POST["from"]) && !empty($_POST["to"])){
            // we search the history of the in a precise range of date
            $storicoSingoloRange = "SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
            N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
               FROM NOLLEGGIA N
               LEFT JOIN  STUDENTE S
                   ON S.MATRICOLA= N.MATRICOLA
               LEFT JOIN LIBRI L
                    ON N.ISBN_ID = L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
                WHERE N.DATA_USCITA >='$from' AND N.DATA_RITORNO <= '$to'
                    ;";
           $resultStoricoSingoloRange = mysqli_query($link,$storicoSingoloRange);
   
               echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
               <tr>
                   <th> NOME 12 </th>
                   <th> COGNOME </th>
                   <th> TIT LIBRO </th>
                   <th> MATRICOLA </th>   
                   <th> BILIOTECA_IMPEGNATA </th>
                   <th> DATA_USCITA </th> 
                   <th> DATA_RITORNO </th>          
               </tr>";
   
               while($row = mysqli_fetch_array($resultStoricoSingoloRange, MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>" . $row["NOME"]. "</td>";
                   echo "<td>" . $row["COGNOME"]. "</td>";
                   echo "<td>" . $row["TITOLO"]. "</td>";
                   echo "<td>" . $row["MATRICOLA"]. "</td>";
                   echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                   echo "<td>" . $row["DATA_USCITA"]. "</td>";
                   echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                   echo "</tr>";
               }
               
               echo "</table>";
         
        }
         if(!empty($_POST["matSt"]) && (strcmp($matSt, "*")!=0) && (!$flag2)){
            //$flag2 = 0;
            $queryPrintStorico = "SELECT S.NOME , S.COGNOME, L.TITOLO, S.MATRICOLA,
             N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
                FROM NOLLEGGIA N
                LEFT JOIN  STUDENTE S
                    ON S.MATRICOLA = N.MATRICOLA
                LEFT JOIN LIBRI L
                    ON N.ISBN_ID =  L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
                WHERE N.MATRICOLA='$matSt'";
            $resultStorico = mysqli_query($link,$queryPrintStorico);
    
                echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                <tr>
                    <th> NOME 10 </th>
                    <th> COGNOME </th>
                    <th> TIT LIBRO </th>
                    <th> MATRICOLA </th>  
                    <th> BILIOTECA_IMPEGNATA </th> 
                    <th> DATA_USCITA </th> 
                    <th> DATA_RITORNO </th>          
                </tr>";
    
                while($row = mysqli_fetch_array($resultStorico, MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo "<td>" . $row["NOME"]. "</td>";
                    echo "<td>" . $row["COGNOME"]. "</td>";
                    echo "<td>" . $row["TITOLO"]. "</td>";
                    echo "<td>" . $row["MATRICOLA"]. "</td>";
                    echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                    echo "<td>" . $row["DATA_USCITA"]. "</td>";
                    echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            
        } 

        if(!empty($_POST["matSt"]) && (strcmp($matSt, "*")!=0) && (!$flag2)){
            //$flag2 = 0;
            $queryPrintStorico = "SELECT S.NOME , S.COGNOME, L.TITOLO, S.MATRICOLA,
             N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
                FROM NOLLEGGIA N
                LEFT JOIN  STUDENTE S
                    ON S.MATRICOLA = N.MATRICOLA
                LEFT JOIN LIBRI L
                    ON N.ISBN_ID =  L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
                WHERE N.MATRICOLA='$matSt'";
            $resultStorico = mysqli_query($link,$queryPrintStorico);
    
                echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                <tr>
                    <th> NOME 1 </th>
                    <th> COGNOME </th>
                    <th> TIT LIBRO </th>
                    <th> MATRICOLA </th>  
                    <th> BILIOTECA_IMPEGNATA </th> 
                    <th> DATA_USCITA </th> 
                    <th> DATA_RITORNO </th>          
                </tr>";
    
                while($row = mysqli_fetch_array($resultStorico, MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo "<td>" . $row["NOME"]. "</td>";
                    echo "<td>" . $row["COGNOME"]. "</td>";
                    echo "<td>" . $row["TITOLO"]. "</td>";
                    echo "<td>" . $row["MATRICOLA"]. "</td>";
                    echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                    echo "<td>" . $row["DATA_USCITA"]. "</td>";
                    echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            
        } 

        if(!empty($_POST["from"]) && !empty($_POST["to"]) && !(strcmp($matSt, "*")!=0) ){
            
            $queryStoricoRangeDate = "SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
                    N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
                FROM NOLLEGGIA N
                LEFT JOIN  STUDENTE S
                   ON S.MATRICOLA= N.MATRICOLA
                LEFT JOIN LIBRI L
                   ON N.ISBN_ID = L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
                WHERE N.DATA_USCITA >='$from' AND N.DATA_RITORNO <= '$to';";
                   

           $resultStoricoRangeDate = mysqli_query($link,$queryStoricoRangeDate);
            if($resultStoricoRangeDate ){
               echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
               <tr>
                   <th> NOME2 </th>
                   <th> COGNOME </th>
                   <th> TIT LIBRO </th>
                   <th> MATRICOLA </th>  
                   <th> BILIOTECA_IMPEGNATA </th> 
                   <th> DATA_USCITA </th> 
                   <th> DATA_RITORNO </th>          
               </tr>";
   
               while($row = mysqli_fetch_array($resultStoricoRangeDate, MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>" . $row["NOME"]. "</td>";
                   echo "<td>" . $row["COGNOME"]. "</td>";
                   echo "<td>" . $row["TITOLO"]. "</td>";
                   echo "<td>" . $row["MATRICOLA"]. "</td>";
                   echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                   echo "<td>" . $row["DATA_USCITA"]. "</td>";
                   echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                   echo "</tr>";
               }
               
               echo "</table>";}
         
        }
       else if(empty($_POST["matSt"]) && empty($_POST["from"]) && empty($_POST["to"])){
            
            $storicoProssScadenze = "SELECT S.NOME , S.COGNOME, S.MATRICOLA, B.NOME_BIBLIOTECA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
            N.DATA_USCITA, N.DATA_RITORNO
               FROM NOLLEGGIA N
               LEFT JOIN  STUDENTE S
                   ON S.MATRICOLA= N.MATRICOLA
               LEFT JOIN LIBRI L
                   ON N.ISBN_ID = L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
               WHERE TIMESTAMPDIFF(DAY,CURDATE(),N.DATA_RITORNO)>0";
                   

           $resultStoricoProssScadenze = mysqli_query($link,$storicoProssScadenze);
            if($resultStoricoProssScadenze){
                echo "Prossime scandenze <br>";
               echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
               <tr>
                   <th> NOME </th>
                   <th> COGNOME </th>
                   <th> TIT LIBRO </th>
                   <th> MATRICOLA </th>   
                   <th> BILIOTECA_IMPEGNATA </th>
                   <th> DATA_USCITA </th> 
                   <th> DATA_RITORNO </th>          
               </tr>";
   
               while($row = mysqli_fetch_array($resultStoricoProssScadenze, MYSQLI_ASSOC)){
                   echo "<tr>";
                   echo "<td>" . $row["NOME"]. "</td>";
                   echo "<td>" . $row["COGNOME"]. "</td>";
                   echo "<td>" . $row["TITOLO"]. "</td>";
                   echo "<td>" . $row["MATRICOLA"]. "</td>";
                   echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                   echo "<td>" . $row["DATA_USCITA"]. "</td>";
                   echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                   echo "</tr>";
               }
               
               echo "</table>";}
         
        }

        if(!empty($_POST["matSt"]) && (strcmp($matSt, "*")!=0) && empty($_POST["from"]) && empty($_POST["to"]) ){
            //$flag2 = 0;
            $queryPrintStorico = "SELECT S.NOME , S.COGNOME, L.TITOLO, S.MATRICOLA,
             N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA
                FROM NOLLEGGIA N
                LEFT JOIN  STUDENTE S
                    ON S.MATRICOLA = N.MATRICOLA
                LEFT JOIN LIBRI L
                    ON N.ISBN_ID =  L.ISBN_ID
                LEFT JOIN BIBLIOTECA B
		            ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
                WHERE N.MATRICOLA='$matSt'";
            $resultStorico = mysqli_query($link,$queryPrintStorico);
    
                echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                <tr>
                    <th> NOME 3 </th>
                    <th> COGNOME </th>
                    <th> TIT LIBRO </th>
                    <th> MATRICOLA </th>  
                    <th> BILIOTECA_IMPEGNATA </th> 
                    <th> DATA_USCITA </th> 
                    <th> DATA_RITORNO </th>          
                </tr>";
    
                while($row = mysqli_fetch_array($resultStorico, MYSQLI_ASSOC)){
                    echo "<tr>";
                    echo "<td>" . $row["NOME"]. "</td>";
                    echo "<td>" . $row["COGNOME"]. "</td>";
                    echo "<td>" . $row["TITOLO"]. "</td>";
                    echo "<td>" . $row["MATRICOLA"]. "</td>";
                    echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                    echo "<td>" . $row["DATA_USCITA"]. "</td>";
                    echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
            
        } 


    
    }

    //Parte Statistiche
    if(isset($_POST["annoPub"]) && isset($_POST["numPrestiti"])){
        $annoPub = $_POST["annoPub"];
        $numPrestiti = $_POST["numPrestiti"];
        //we will use a flag here to control it
        if(!empty($_POST["annoPub"]) && !empty($_POST["numPrestiti"])){
               //$flag = 0;
                $publicati = "SELECT IFNULL(L.ANNO_PUB, 'NOT VALID DATE') ANNO_PUBLICAZZIONE ,  IFNULL(SUM(L.NUM_COPIE),'0') AS NUMERO_COPIE
                FROM LIBRI L
                WHERE L.ANNO_PUB ='$annoPub';";
               
               $prestiti = "SELECT COUNT(N.ID_BIBLIOTECA) AS NUM_PRESTITI
                FROM NOLLEGGIA N
                WHERE N.ID_BIBLIOTECA='$numPrestiti';
                ";
                $numLibriAutori = "SELECT A.NOME, A.COGNOME, COUNT(S.AUTORI_ID) AS LIBRI_PUBLICATI
                    FROM SCRITTO_DA S
                    LEFT JOIN AUTORI A
                        ON S.AUTORI_ID = A.AUTORI_ID
                    GROUP BY S.AUTORI_ID
                    ;";

                $resultPublicati = mysqli_query($link,$publicati);
                $resultNumPrestiti = mysqli_query($link,$prestiti);
                $resultNumLibriAutori = mysqli_query($link,$numLibriAutori);

               if($resultPublicati && $resultNumPrestiti && $resultNumLibriAutori){
    
                echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                  <tr>
                      <th> ANNO PUBLICAZIONE </th>
                      <th> NUMERI LIBRI PUBLICATI </th>                               
                  </tr>";
      
                  while($row = mysqli_fetch_array($resultPublicati, MYSQLI_ASSOC) ){
                      echo "<tr>";
                      echo "<td>" . $row["ANNO_PUBLICAZZIONE"]. "</td>";
                      echo "<td>" . $row["NUMERO_COPIE"]. "</td>";
                      
                      echo "</tr>";
                  }
                  
                  echo "</table>";
                
                
                  // TABLE 2
                  
                  echo "\n <br>";
                  echo "\n <br>";
                  echo "NUMERO DEI PRESTITI NEL DIPARTIMENTO SCELTO";
                  
                  echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                  <tr>
                      <th> NUMERO PRESTITI </th
                  </tr>";
      
                  while($row2 = mysqli_fetch_array($resultNumPrestiti, MYSQLI_ASSOC) ){
                      echo "<tr>";   
                      echo "<td>" . $row2["NUM_PRESTITI"]. "</td>";
                      echo "</tr>";
                  }
                  
                  echo "</table>";
                

                  // TABLE 3


                  echo "\n <br>";
                  echo "\n <br>";
                  echo "NUMERO DI LIBRI PUBLICATI PER AUTORE";
                  
                  echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                  <tr>
                      <th> NOME AUTORE </th>
                      <th> COGNOME AUTORE </th>
                      <th> NUMERO DI LIBRI PUBLICATI </th>
                  </tr>";
      
                  while($row3 = mysqli_fetch_array($resultNumLibriAutori, MYSQLI_ASSOC) ){
                      echo "<tr>";   
                      echo "<td>" . $row3["NOME"]. "</td>";
                      echo "<td>" . $row3["COGNOME"]. "</td>";
                      echo "<td>" . $row3["LIBRI_PUBLICATI"]. "</td>";
                      echo "</tr>";
                  }
                  
                  echo "</table>";
                
                }
            
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