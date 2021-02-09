<?php

$db="configuration";
$dbhost="localhost";
//$dbport=3307;
$dbport=3306;
// $dbuser="root";
dbuser="matthieu";
// $dbpasswd="";
$dbpasswd="mdp";

$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");

$stmt = $pdo->prepare("SELECT * FROM description WHERE id=2");
$stmt->execute();

$res = $stmt->fetch();
echo $res['Description'];

//phpinfo()

?>