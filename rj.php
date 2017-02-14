<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
// Initialiser la session
session_start();
// Si le post n'est pas vide
if (!empty($_POST['nom']) && !empty($_POST['email'])) {
    // On enregistre le post dans la session
    //$_SESSION = $_POST;
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['annéeDeNaissance']= $_Post['annéeDeNaissance'];


    echo 'Le nom est : ' . htmlentities($_POST['nom']) . '<br>';
    echo 'Le prénom est : ' . htmlentities($_POST['prenom']) . '<br>';
    echo 'L\'email est : ' . htmlentities($_POST['email']) . '<br>';
    echo 'Le password est : ' . htmlentities($_POST['password']) . '<br>';
    echo 'la date de naissance est:' .htmlentities($_Post['annéeDeNaissance']) . '<br>';

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
    <label for="naissance">Veuillez indiquez votre date de naissance :</label><br/>
    <select name="jour" id="jour">
        <?php
        for($date_jour = 1; $date_jour <= 31; $date_jour++)
        {
            ?>
            <option value="<?php echo $date_jour ?>"><?php echo $date_jour?></option>
            <?php
        }
        ?>
    </select>

    <select name="mois" id="mois">
        <?php
        for($date_mois = 1; $date_mois <= 12; $date_mois++)
        {
            ?>
            <option value="<?php echo $date_mois ?>"><?php echo $date_mois ?></option>
            <?php
        }
        ?>
    </select>

    <select name="annee" id="annee">
        <?php
        for($date_annee = 1920; $date_annee <= 2017; $date_annee++)
        {
            ?>
            <option value="<?php echo $date_annee ?>"><?php echo $date_annee ?></option>
            <?php
        }
        ?>




<form action="" method="post">
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="prenom" placeholder="prénom">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="password">
    <button type="submit">confirmer</button>
</form>
