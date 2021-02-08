<?php

$db="configuration";
$dbhost="localhost";
$dbport=3306;
$dbuser="matthieu";
$dbpasswd="mdp";

$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");

$stmt = $pdo->prepare("SELECT * FROM description WHERE id=1");
$stmt->execute();

$res = $stmt->fetch();
echo $res['Description'];

//phpinfo()

?>