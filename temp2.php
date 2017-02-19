<?php
// $db = connexion PDO

require "connect.php"

$req = $db->query("SELECT ID, nom FROM images ORDER BY ID DESC LIMIT 15");
$tab = $req->fetchAll(PDO::FETCH_ASSOC);
$tab = array_reverse($tab);
foreach($tab as $cle => $arr)
  echo 'ID : '.$tab[$cle]['ID'].'<br />Nom : '.$tab[$cle]['nom'].'<hr />';
?>