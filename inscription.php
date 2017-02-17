<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
// Initialiser la session
session_start();
try{
    $bdd= new pdo('mysql:host=localhost;dbname=projet_php_b1b_urpics', 'root','',array (pdo::ATTR_ERRMODE => pdo:: ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('erreur :' .$e-> getMessage());
}

if (!empty($_POST['nom']) && !empty($_POST['email'])) {
    // On enregistre le post dans la session
    //$_SESSION = $_POST;
    /*
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['annéeDeNaissance']= $_Post['aéeDeNaissancenn'];
*/

    echo 'Le nom est : ' . htmlentities($_POST['nom']) . '<br>';
    echo 'Le prénom est : ' . htmlentities($_POST['prenom']) . '<br>';
    echo 'L\'email est : ' . htmlentities($_POST['email']) . '<br>';
    echo 'Le password est : ' . htmlentities($_POST['password']) . '<br>';
    echo 'la date de naissance est:'. date($_POST['aniv']) . '<br>';

    $r=$bdd ->prepare('INSERT INTO `users` (`nom`, `prenom`, `email`, `password`) VALUE (:nom ,:prenom,:email,:password)');
    $r->bindValue(':nom',$nom,PDO::PARAM_STR);
    $r->bindValue(':prenom',$prenom,PDO::PARAM_STR);
    $r->bindValue(':email',$email,PDO::PARAM_STR);
    $r->bindValue(':password',$password,PDO::PARAM_STR);
    $r->execute();
    $r->closeCursor();

} elseif (!empty($_POST)) {
    echo 'erreur';}

?>
<?php

if (empty($_POST['jour']) && empty($_POST['mois']) && empty($_POST['annee'])){
echo "Veuillez entrer une date";
}


?>

<body>
<form method="post" action="">

    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="prenom" placeholder="prénom">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <input type="date" name="aniv">
    <button type="submit">confirmer</button>
</form>
