<!DOCTYPE html>
<html lang="en">
<?php

// Connexion à la BDD
require 'connect.php';

// Bloque l'accès si la personne n'est pas connectée
if (empty($_SESSION['connected'])) {
    header('Location:redirection.php');
}

// à l'envoie du formulaire
if (!empty($_POST)) {

    // initialisation du nom de la photo
    $pixName = '';

    // Upload de photo
    if (!empty($_FILES)) {

        $mime_valid = ['image/png', 'image/jpeg','image/gif'];
        $extension_valid = ['png', 'jpeg','jpg','gif'];

               $extension = pathinfo($_FILES['picture']['name'])['extension'];
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES['picture']['tmp_name']);

        // test le mime & l'extension avec pathinfo() -- On ne veut que des fichiers PNG
        if(in_array($extension, $extension_valid) && in_array($mime, $mime_valid)){
            move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/' . $_FILES['picture']['name']);

            // L'enregistrement du nom de la photo suite à l'upload
            $pixName = $_FILES['picture']['name'];
        } else {
            echo 'Erreur de format';
        }
    }

    // Enregistrement du produit avec le nom de la photo si il y a eu un upload 
    $stmt = $dbh->prepare('INSERT INTO images VALUES(NULL, :picture)');
    $stmt->execute([
        ':picture' => $pixName
    ]);
}

?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="upload.css">
        <link href="https://fonts.googleapis.com/css?family=Emblema+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>UrPics</title>

    </head>

    <body>


        <div class="row first">

            <div class="col-lg-2"></div>

            <p class="date">
                <?php echo date('d/m/Y h:i:s'); ?>
            </p>

            <div class="col-lg-8">

                <div class="header">

                    <a href="#" class="logo"><img src="img/LogoTest.png" alt="#" width="160"></a>

                    <cite>
                        Le site pour uploader, <br> et partager !
                    </cite>

                    <nav>

                        <ul>
                            <li>
                                <a href="#"><img src="img/Icon_Upload_Test.png" alt="Upload" width="50" height="50"></a>
                            </li>
                            <li>
                                <a href="galerie.php"><img src="img/Icon_Image_Test.png" alt="Galerie" width="40" height="40"></a>
                            </li>
                            <li>
                                <a href="profil.php"><img src="img/Icon_Connexion_Test.png" alt="Connexion" width="50" height="50"></a>
                            </li>
                            <li>
                                <a href="logout.php"><img src="img/Icon_Deconnexion.png" alt="Deconnexion" width="40" height="40"></a>
                            </li>
                        </ul>

                    </nav>

                    <div class="col-md-2"></div>

                    <div id="upload">

                        <p class="title1">
                            UPLOAD
                        </p>
                        <form action="http://localhost/Projet_PHP_B1B_Jerome_Raphael_Nathan/galerie.php" method="post" enctype="multipart/form-data">
                            <label>
                                  Nom :
                                <input type="text" name="name">
                            </label>
                            <br>
                            <label>
                                  Photo :
                                <input type="file" name="picture">
                            </label>
                            <br>
                            <button type="submit" >Envoyer vers la galerie</button>
                        </form>



                    </div>

                </div>

            </div>

        </div>

    </body>

</html>