<?php

    require_once 'connexion.php';
    $flag = 1;
    $flag2 = 1;
    $flagUtenti = 1;


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

            $titolo = $_POST["titolo"];
            if(!empty($titolo)){    
                $titoloQuery = "SELECT TITOLO, ISBN_ID, ISBN, LINGUA, ANNO_PUB, NUM_COPIE  FROM LIBRI WHERE TITOLO REGEXP '^$titolo'";
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
                WHERE NOME = '$autore'))))
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
        $search = mysqli_real_escape_string($link,$_POST["author"]);
        $author = str_replace(", ","|", $search);
        //Ricerca degli autori con i nomi cominciando con quello inserito nell'input.
        if(!empty($author)){
            $queryDatiAut = "SELECT NOME, COGNOME, AUTORI_ID, DATA_NASCITA, LDN
            FROM AUTORI
            WHERE NOME REGEXP '^($author)'";

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

        }
    
    }


    //Parte utenti/Studenti
    // Inserire Studente
    if(isset($_POST["nomeStudente"]) && isset($_POST["cognomeStudente"]) && isset($_POST["matricola"]) && isset($_POST["telefono"]) && isset($_POST["indirizzo"]) ){
        $nomeStudente = $_POST["nomeStudente"];
        $cognomeStudente = $_POST["cognomeStudente"];
        $matricola = $_POST["matricola"];
        $telefono = $_POST["telefono"];
        $indirizzo = $_POST["indirizzo"];

        if(!empty($_POST["nomeStudente"]) && !empty($_POST["cognomeStudente"]) && !empty($_POST["matricola"])
        && !empty($_POST["telefono"]) && !empty($_POST["indirizzo"])){

            //here we write the query : inserisce lo studente nella DB
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
            // se non compilla tutti i campi
        else{
           
         echo "DEVI COMPILARE TUTTI I CAMPI !!!";
         
     }
    
    }

    // Ricerca Studente
    if(isset($_POST["nomeStud"])){
        $nomeStud = $_POST["nomeStud"];

        //Stampa uno studente ben preciso, quello del nome inserito
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
                 <th> CANCELLA STUDENTE </th>

             </tr>";
 
             while($row = mysqli_fetch_array($resultRicerca, MYSQLI_ASSOC)){
                 echo "<tr>";
                 echo "<td>" . $row["NOME"]. "</td>";
                 echo "<td>" . $row["COGNOME"]. "</td>";
                 echo "<td>" . $row["MATRICOLA"]. "</td>";
                 echo "<td>" . $row["TELEFONO"]. "</td>";
                 echo "<td>" . $row["INDIRIZZO"]. "</td>";
                 echo "<td> <a href='#' class='del' onclick='deleteAjax(".$row['MATRICOLA'].");'> Delete </a> </td>";
                 echo "</tr>";
             }
             
             echo "</table>";
        }

        else {
        // Stampa tutti i studenti nella DB se no precisiamo uno in particolare
        // e ci permette de li cancellare .
         
            $queryRicercaStudente = "SELECT * FROM STUDENTE";
            $resultRicerca = mysqli_query($link,$queryRicercaStudente);
 
             echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
             <tr>
                 <th> NOME </th>
                 <th> COGNOME </th>
                 <th> MATRICOLA </th>
                 <th> TELEFONO </th>
                 <th> INDIRIZZO </th>    
                 <th> CANCELLA STUDENTE </th>         
             </tr>";
 
             while($row = mysqli_fetch_array($resultRicerca, MYSQLI_ASSOC)){
                 echo "<tr id='delete".$row['MATRICOLA']."'>";
                 echo "<td>" . $row["NOME"]. "</td>";
                 echo "<td>" . $row["COGNOME"]. "</td>";
                 echo "<td>" . $row["MATRICOLA"]. "</td>";
                 echo "<td>" . $row["TELEFONO"]. "</td>";
                 echo "<td>" . $row["INDIRIZZO"]. "</td>";
                 echo "<td> 
                 <a href='#' class='del' onclick='deleteAjax(".$row['MATRICOLA'].");'> Delete </a> </td>";
                 echo "</tr>";
             }
             
             echo "</table>";    
         
        }
    
    }
    // ENd Ricerca



    //Parte Nolleggi
    if(isset($_POST["matricolaStudente"]) && isset($_POST["titoloLibro"])
        && isset($_POST["dataPrestito"])){
        $matricolaStudente = $_POST["matricolaStudente"];
        $titoloLibro = $_POST["titoloLibro"];
        $dataPrestito = $_POST["dataPrestito"];
        
        if(!empty($_POST["matricolaStudente"]) && !empty($_POST["titoloLibro"])
            && !empty($_POST["dataPrestito"])){
               
            // DISABLE THE FOREIGN KEY TO CANCEL DATA IN COPIA
            mysqli_query($link,"SET FOREIGN_KEY_CHECKS=0;");
            
            //retreive il codice univoco della copia a togliere
            $retreive = mysqli_query($link, "SELECT  C.CODICE_UNIVOCO CODICE_UNIVOCO
                FROM COPIA C
                LEFT JOIN LIBRI L
                    ON C.ISBN_ID=L.ISBN_ID
                WHERE L.TITOLO='$titoloLibro'
                limit 1;");

            $row = mysqli_fetch_array($retreive,MYSQLI_ASSOC);
            $cu = $row['CODICE_UNIVOCO'];
            //echo "$cu";

            $queryNolleggio = "INSERT INTO NOLLEGGIA(MATRICOLA, CODICE_UNIVOCO, ISBN_ID, ID_BIBLIOTECA,
                DATA_USCITA, DATA_RITORNO)
                SELECT (SELECT MATRICOLA FROM STUDENTE
                    WHERE MATRICOLA='$matricolaStudente') , 
                    '$cu', C.ISBN_ID ISBN_ID,
                    C.ID_BIBLIOTECA ID_BIBLIOTECA, '$dataPrestito', '$dataPrestito'+interval 30 day
                FROM COPIA C
                LEFT JOIN LIBRI L
                    ON C.ISBN_ID=L.ISBN_ID
                WHERE L.TITOLO='$titoloLibro'
                order by CODICE_UNIVOCO ASC
                limit 1;";

            // CANCELLO LA COPIA PER EVITARE DI NOLLEGGIARE LA STESSA
            
            // inserisco il nolleggio appena fatto
            $resultNolleggio = mysqli_query($link,$queryNolleggio);
            // lo cancello della table COPIA per non prenderlo di nuovo
            //che è gia impegnato
            $queryCancellazioneCopi= mysqli_query($link, "DELETE FROM COPIA WHERE CODICE_UNIVOCO='$cu';");


            // RE-ENABLE THE FOREIGN KEY
            mysqli_query($link,"SET FOREIGN_KEY_CHECKS=1;");

            
            // to check again , dont work well
            
            if(!empty($cu)){
                echo "Noleggio effetuato con successo!" ;
                //echo mysqli_num_rows($resultNolleggio);
            }
            else{
                echo "Siamo Spiacente tutti i libri con questo titolo sono gia impegnati, e quello in tutte le biblioteca dell'universita !";
                echo "</br>Piacere di riprovare piu tardi !";
            }
            
        }

    
    }


    //Parte Visualizza storico
    if(isset($_POST["matSt"]) && isset($_POST["from"]) && isset($_POST["to"])){
        $matSt = $_POST["matSt"];
        $from = $_POST["from"];
        $to= $_POST["to"];


        // All rent: ti presenta tutti i prestiti fatto non importa la data 
        //Da la possibilita di cancello
        if((strcmp($matSt, "*")==0) && empty($_POST["from"]) && empty($_POST["to"])){
            $flag2 = 0;
            $queryPrintStoricoAll = "SELECT S.NOME , S.COGNOME, S.MATRICOLA, L.TITOLO, N.CODICE_UNIVOCO CU_LIBRO,
                    N.DATA_USCITA, N.DATA_RITORNO, B.NOME_BIBLIOTECA, B.ID_BIBLIOTECA ID_BIB, N.ISBN_ID ISBN_ID
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
                   <th> CU_LIBRO  </th>
                   <th> BILIOTECA_IMPEGNATA </th> 
                   <th> DATA_USCITA </th> 
                   <th> DATA_RITORNO </th>  
                   <th> CANCELLA NOLLEGGIO</th>        
               </tr>";
   
               while($row = mysqli_fetch_array($resultStoricoAll, MYSQLI_ASSOC)){
                echo "<tr id='delNol".$row['CU_LIBRO']."'>";
                   echo "<td>" . $row["NOME"]. "</td>";
                   echo "<td>" . $row["COGNOME"]. "</td>";
                   echo "<td>" . $row["TITOLO"]. "</td>";
                   echo "<td>" . $row["MATRICOLA"]. "</td>";
                   echo "<td>" . $row["CU_LIBRO"]. "</td>";
                   echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                   echo "<td>" . $row["DATA_USCITA"]. "</td>";
                   echo "<td>" . $row["DATA_RITORNO"]. "</td>";
                   echo "<td> <a href='#' class='del' onclick='deleteNolleggio(".$row['MATRICOLA'].",".$row["CU_LIBRO"].",".$row["ID_BIB"].",".$row["ISBN_ID"].");'> Delete </a> </td>";
                   echo "</tr>";
               }
               
               echo "</table>";
         
        } 
        // se non riempiamo gli input qua ci fa la ricerca sul range di date dato in ingresso e quello per lo studente di cui
        // e stato inserito la matricola
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
                   <th> NOME </th>
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
        // qua non abbiamo intrato una matricola
        //qui facciamo la ricerca su un range di date per tutti i prestiti gia fatti 
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
                   <th> NOME </th>
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
        //qua abbiamo solo insertito la matricola di uno studente quindi stampiamo i sui prestiti fatti non importa il periodo
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
                    <th> NOME </th>
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
        // peccato ! mi sono dimenticato cos ho scritto, pensaci, lol
        // dovrebbe eesere la ricerca dei prestiti di uno studente
        //e il flag sembra servire a impedire di stampare 2 volte il messaggi quello della query qua sopra e questa giu, si!
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
                    <th> NOME </th>
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
        // qua stampa tutti i prestiti fatti effetuati in un range di date per tutti i studenti avendo effetuato prestiti
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
                   <th> NOME </th>
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
        // qua non abbiamo inserito nulla quindi ci stampa i prestiti che si terminano nei giorni successivi
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
        //qua ci stanpa solemente i prestiti di uno studente preciso di cui e stato inserito la matricola
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
                    <th> NOME </th>
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
        
        if(!empty($_POST["annoPub"]) && !empty($_POST["numPrestiti"])){

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
                //Query per contare i numeri di libri publicati nell'anno inserito in input
                $resultPublicati = mysqli_query($link,$publicati);
                //Query per contare i numeri di di prestiti nell dipartimento scelto in select
                $resultNumPrestiti = mysqli_query($link,$prestiti);
                //Query per contare i numeri di libri publicati nper autori
                $resultNumLibriAutori = mysqli_query($link,$numLibriAutori);

                //se tutto bene stampiamo le stats
               if($resultPublicati && $resultNumPrestiti && $resultNumLibriAutori){
                
    
                echo "\n <br>";
                echo "NUMERO DI LIBRI PUBLICATI";
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

    //Parte statistiche aggiuntive
    if(isset($_POST["niente"])){

        // Stat 1: il Studente che ha fatto il piu prestiti
        
        $piuPrestiti = mysqli_query($link,"SELECT N.MATRICOLA, S.NOME, S.COGNOME, S.INDIRIZZO, S.TELEFONO,
            COUNT(N.MATRICOLA) AS `TOTALE_LIBRI` 
            FROM NOLLEGGIA N
            LEFT JOIN STUDENTE S
                ON N.MATRICOLA = S.MATRICOLA
                GROUP BY N.MATRICOLA
                ORDER BY `TOTALE_LIBRI` DESC
                LIMIT 1;");

        // Stat 2: Studente con piu prestiti
        $bibMaxPrestiti = mysqli_query($link,"SELECT B.NOME_BIBLIOTECA, B.ID_BIBLIOTECA, B.CITTA, B.VIA, B.CAP, B.NUMERO_CIVICO
            , COUNT(N.ID_BIBLIOTECA) AS 'TOTALE_PRESTITI'
            FROM  NOLLEGGIA N 
            LEFT JOIN BIBLIOTECA B
                ON N.ID_BIBLIOTECA = B.ID_BIBLIOTECA
            GROUP BY N.ID_BIBLIOTECA
            ORDER BY 'TOTALE_PRESTITI' DESC
            LIMIT 1;");

        echo "<b>Studente con piu prestiti</b> </br>\n";
        echo "</br>";
        if(!$piuPrestiti){
            echo "Non ci sone ancora prestiti effetuati. Quindi impossibile visualizzare
            questo risultato.";
        }
        else{
            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                <tr>
                    <th> NOME </th>
                    <th> COGNOME </th> 
                    <th> MATRICOLA </th>
                    <th> TELEFONO </th>
                    <th> INDIRIZZO </th>
                    <th> TOTALE LIBRI </th>                          
                </tr>";
      
            while($row = mysqli_fetch_array($piuPrestiti, MYSQLI_ASSOC) ){
                echo "<tr>";
                echo "<td>" . $row["NOME"]. "</td>";
                echo "<td>" . $row["COGNOME"]. "</td>"; 
                echo "<td>" . $row["MATRICOLA"]. "</td>";
                echo "<td>" . $row["TELEFONO"]. "</td>";
                echo "<td>" . $row["INDIRIZZO"]. "</td>"; 
                echo "<td>" . $row["TOTALE_LIBRI"]. "</td>";      
                echo "</tr>";
            }
                  
            echo "</table>";

            //Stat2 biblioteca che ha avuto piu richieste di prestiti
            echo "<br> \n";
            echo "<b>Biblioteca con piu prestiti</b></br>\n";
            echo "</br> \n";

            echo "<table border=1 cellpadding=1 cellspacing=1 align=center width=100% >
                <tr>
                    <th> NOME BIBLIOTECA </th>
                    <th> ID BIBLIOTECA </th> 
                    <th> CITA </th>
                    <th> VIA </th>
                    <th> CAP </th>
                    <th> NUMERO CIVICO </th> 
                    <th> TOTALE PRESTITI </th>                         
                </tr>";
      
            while($row = mysqli_fetch_array($bibMaxPrestiti, MYSQLI_ASSOC) ){
                echo "<tr>";
                echo "<td>" . $row["NOME_BIBLIOTECA"]. "</td>";
                echo "<td>" . $row["ID_BIBLIOTECA"]. "</td>"; 
                echo "<td>" . $row["CITTA"]. "</td>";
                echo "<td>" . $row["VIA"]. "</td>";
                echo "<td>" . $row["CAP"]. "</td>"; 
                echo "<td>" . $row["NUMERO_CIVICO"]. "</td>"; 
                echo "<td>" . $row["TOTALE_PRESTITI"]. "</td>";      
                echo "</tr>";
            }
                  
            echo "</table>";

        }

        

        //-- to do 

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