<?php
    session_start();
    $link = mysqli_connect("127.0.0.1", "liani", "password", "Biblioteca");

    if(!$link){
        echo "si è verificato un errore durante la connessione al DB <br/>";
        echo "codice errore: ". mysqli_connect_errno(). "<br/>";
        echo "Messaggio errore: ". mysqli_connect_error() ."<br/>";
        exit;
    }
?>
