<?php
session_start();
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
$dsn = '';
$user = '';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
}
$reponse= $dbh  prepare('select* * from database limit 0,5');
$reponse->execute();
while ($donnees = $reponse -> fetch())
{
echo '<img src="' . $donnees['url'] . '" alt="' . $donnees['name'] . '">';
}
?>