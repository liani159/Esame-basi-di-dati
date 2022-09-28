<?php
    $link = mysqli_connect("127.0.0.1", "liani", "password", "Biblioteca");

    if(!$link){
        echo "si è verificato un errore durante la connessione al DB <br/>";
        echo "codice errore: ". mysqli_connect_errno(). "<br/>";
        echo "Messaggio errore: ". mysqli_connect_error() ."<br/>";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>