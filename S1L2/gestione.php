<?php
session_start();
$contacts = $_SESSION["contacts"] ? $_SESSION["contacts"] : [];

print_r($_REQUEST);
$contact = ["email" => $_REQUEST["email"], "password" => $_REQUEST["password"]];

$_SESSION["contacts"] = [...$contacts, $contact];

session_write_close();

header("Location: ../S1L2/index.php");
?>