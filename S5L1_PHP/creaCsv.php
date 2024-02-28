<?php
require_once 'config.php';
$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password']);

if ($mysqli->connect_error) {die($mysqli->connect_error);}


//Specifico quale database usare
$sql = 'USE esercizio_csv;';
$mysqli->query($sql);


$dir = 'file/';
$file = 'users.csv';
$users= $mysqli->query('SELECT * FROM utenti');

if(!file_exists($dir)) {
    mkdir($dir, 0777);
} 

$resource = fopen($dir.$file, 'w');
if($resource) {
    foreach($users as $user) {
        fputcsv($resource, $user, ';');
    }
    fclose($resource);
}

header('Location: index.php');