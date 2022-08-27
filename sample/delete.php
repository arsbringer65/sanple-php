<?php

require('../header.php');

$username = 'elarde';

$sql = "DELETE FROM user_account WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
echo $stmt->rowCount();
