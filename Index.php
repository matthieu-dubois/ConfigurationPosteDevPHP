<?php

$db="configuration";
$dbhost="localhost";

// serveur 
// $dbport=3306;
// $dbuser="matthieu";
// $dbpasswd="mdp";

//local ( poste developpement)
$dbport=3307;
$dbuser="root";
$dbpasswd="";

$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");

$stmt = $pdo->prepare("SELECT * FROM description WHERE id=2");
$stmt->execute();

$res = $stmt->fetch();
echo $res['Description'];

//phpinfo()

?>