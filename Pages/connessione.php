<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "compito_assicurazioni";

$connessione = mysqli_connect($host, $user, $pass, $db) or die ("<br>Errore di connessione" . mysqli_error($connessione));
?>