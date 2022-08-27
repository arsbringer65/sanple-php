<?php

require('../header.php');



$search = '%san%';
$sql = "SELECT * FROM user_account WHERE last_name LIKE ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$users = $stmt->fetchAll();

foreach($users as $user){
    echo $user->first_name. " " .$user->last_name."<br>";
}

