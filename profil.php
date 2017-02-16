<?php

require 'connect.php';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (Exception $e){
    echo $e->getMessage();
}

$stmt = $dbh->prepare('SELECT * FROM users WHERE id = :id');
$stmt->execute([
    ':id' => $_SESSION['id']
]);
$users = $stmt->fetchAll();
?>

<table border="1">

    <tr>
        <th>#</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Mot de passe</th>
    </tr>

    <?php
    foreach ($users as $user){
        echo '
        <tr>
            <td>'.$user['id'].'</td>
            <td>'.$user['prenom'].'</td>
            <td>'.$user['nom'].'</td>
            <td>'.$user['email'].'</td>
            <td>'.$user['password'].'</td>
        </tr>';
    }
    ?>

</table>
