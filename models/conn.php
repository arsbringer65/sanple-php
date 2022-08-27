<?php

$host = 'localhost';
$dbname = 'sample_db';
$user = 'root';
$password = '';


//data source name
$conn = "mysql:host=$host;dbname=$dbname";


$pdo = new PDO($conn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



//prepared Statement







