<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="inscription.css">
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

                    <a href="index.php" class="logo"><img src="img/LogoTest.png" alt="#" width="160"></a>

                    <cite>
                        Le site pour uploader, <br> et partager !
                    </cite>

                    <nav>

                        <ul>
                            <li><a href="redirection.php"><img src="img/Icon_Upload_Test.png" alt="Upload" width="50" height="50"></a></li>
                            <li><a href="redirection.php"><img src="img/Icon_Image_Test.png" alt="Galerie" width="40" height="40"></a></li>
                            <li><a href="connexion.php"><img src="img/Icon_Connexion_Test.png" alt="Connexion" width="50" height="50"></a></li>
                            <li><a href="#"><img src="img/Icon_Inscription.png" alt="Inscription" width="40" height="40"></a></li>
                        </ul>

                    </nav>

                    <div class="col-md-2"></div>

                    <div class="connexion">

                        <p class="title1">

                            INSCRIPTION <br>

                        </p>

                        <form method="post">

                            <input type="text" name="pseudo" placeholder="Nom d'Utilisateur" class="formul"><br><br>

                            <input type="email" name="email" placeholder="Email" class="formul"><br><br>

                            <input type="text" name="nom" placeholder="Nom" class="formul"><br><br>

                            <input type="text" name="prenom" placeholder="Prenom" class="formul"><br><br>

                            <input type="password" name="password" placeholder="Mot De Passe" class="formul"><br><br>


                            <input type="submit" value="S'inscrire" class="inscrire">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>