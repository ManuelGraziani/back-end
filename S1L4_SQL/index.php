<?php

require_once 'config.php';
//var_dump($config);

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password']);

if ($mysqli->connect_error) {die($mysqli->connect_error);}

// Creo il database
$sql = 'CREATE DATABASE IF NOT EXISTS esercizio;';
if (!$mysqli->query($sql)) {die($mysqli->connect_error);}

//Specifico quale database usare
$sql = 'USE esercizio;';
$mysqli->query($sql);

// Creo la tabella

$sql = 'CREATE TABLE IF NOT EXISTS utenti (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
)'; 
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}


//Prendo i dati dal form e li inserisco nel database
/* 
$nome= $_REQUEST['nome'];
$cognome= $_REQUEST['cognome'];
$email= $_REQUEST['email'];

$sql = "INSERT INTO utenti (nome, cognome, email) VALUES ('$nome', '$cognome', '$email');";
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}
else {echo 'Dati inseriti con successo!!!';} */

//Modifico dati del database

/* $sql = 'UPDATE utenti SET nome = "Marco" WHERE id = 3;';
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}
else {echo 'Dati modificati con successo!!!';} */

//elimino dati del database

/* $sql = 'DELETE FROM utenti WHERE id = 3;';
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}
else {echo 'Dati eliminati con successo!!!';}
 */

/* $sql = 'SELECT * FROM utenti;';
$results = [];
$res = $mysqli->query($sql);
if($res){
    while($row = $res->fetch_assoc()){
        $results[] = $row;
    }
    // print_r($results);
}

foreach($results as $key => $value){
    echo $value['id'].' '.$value['nome'].' '.$value['cognome'].' '.$value['email'].'<br>';
} */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Pagina di registrazione</h1>
        <form method="POST" action="insert.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Inserisci il tuo nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="cognome" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="cognome" aria-describedby="cognome" placeholder="Inserisci il tuo cognome" name="cognome">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci la tua email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>