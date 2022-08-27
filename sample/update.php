<?php

require('../header.php');

$id = 1;
$username = 'ars';

$sql = "UPDATE user_account SET username = :username WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username'=> $username, 'id'=>$id]);

echo $stmt->rowCount();

