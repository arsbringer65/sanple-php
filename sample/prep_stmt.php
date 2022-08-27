<?php

require('../header.php');

//prepared statements

$gender = 'female';
// Positional Parameter
echo '---Positional Parameter Output---'."<br/>";
$sql = "SELECT * FROM user_account WHERE gender = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$gender]);

$users = $stmt->fetchAll();

foreach($users as $user){
    echo $user->first_name." ".$user->last_name."<br/>";
}

//Name Parameter
echo '----Name Parameter Output----'."<br/>";
$sql = "SELECT * FROM user_account WHERE gender = :gender";
$stmt = $pdo->prepare($sql);
$stmt->execute(['gender'=>$gender]);

$users = $stmt->fetchAll();

foreach($users as $user){
    echo $user->first_name." ".$user->last_name." - ".$user->gender."<br/>";
}

//Getting Single Query
echo "---Getting Single Query---<br>";
$id = 6;
$sql = "SELECT * FROM user_account WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id]);
$users = $stmt->fetch();

echo $users->first_name." ".$user->last_name."<br>";


//Getting The Number of rows
echo "---Getting The Number of rows Output---<br>";

$sql = "SELECT * FROM user_account WHERE gender = :gender";
$stmt = $pdo->prepare($sql);
$stmt->execute(['gender'=>$gender]);
$userCount = $stmt->rowCount();

echo $userCount;






