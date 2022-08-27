<?php

require('../header.php');


//pdo query
$stmt = $pdo->query("SELECT * FROM user_account");

while($row = $stmt->fetch()){

    echo $row->first_name." ".$row->last_name. "<br/>";
}

