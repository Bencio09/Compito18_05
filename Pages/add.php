<?php
include "./connessione.php";
$cf = $_POST["proprietario"];
$targa = $_POST["targa"];
$polizza = $_POST["polizza"];
$modello = $_POST["modello"];
$marca = $_POST["marca"];
$cilindrata = $_POST["cilindrata"];
$potenza = $_POST["potenza"];


$query = "INSERT INTO Automobile VALUES ($targa, $marca, $modello, $cilindrata, $potenza, $cf, $polizza)";
$result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

?>