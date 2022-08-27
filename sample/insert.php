<?php

require('../header.php');

//Insert Data

$username = 'ars';
$first_name = 'Abdul';
$last_name = 'Rauf';
$gender = 'male';
$email = 'ars@mail.com';
$password ='P@ssword';

$sql = "INSERT INTO user_account(username, first_name, last_name, gender, email, password)VALUES(:username,:first_name,:last_name,:gender,:email,:password)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username'=> $username, 'first_name'=> $first_name, 'last_name'=> $last_name, 'gender'=> $gender, 'email'=> $email, 'password'=> $hashpass = password_hash($password, PASSWORD_DEFAULT)]);

echo $stmt->rowCount();
