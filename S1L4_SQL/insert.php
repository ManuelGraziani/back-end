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

$nome= $_REQUEST['nome'];
$cognome= $_REQUEST['cognome'];
$email= $_REQUEST['email'];

$sql = "INSERT INTO utenti (nome, cognome, email) VALUES ('$nome', '$cognome', '$email');";
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}
else {echo 'Dati inseriti con successo!!!';}

//Modifico dati form

/* $sql = 'UPDATE utenti SET nome = "Marco" WHERE id = 3;';
if(!$mysqli->query($sql)) {die($mysqli->connect_error);}
else {echo 'Dati modificati con successo!!!';} */

?>
