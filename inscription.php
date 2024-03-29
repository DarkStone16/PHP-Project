<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/inscription.css">
        <link href="https://fonts.googleapis.com/css?family=Emblema+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>UrPics</title>

        <link rel="shortcut icon" href="./img/Logo_UrPics.png">

    </head>

    <body>

        <div class="container-fluid">

            <div class="row first">

                <div class="col-lg-2 col-md-2 col-sm-2"></div>

                <div class="col-lg-8 col-md-8 col-sm-8">

                    <div class="header">

                        <div class="col-lg-2 col-md-2 col-sm-4">

                            <a href="index.php" class="logo"><img src="img/LogoTest.png" alt="#" width="160"></a>

                        </div>

                        <div class="col-lg-4 col-md-10 col-sm-6">

                            <cite>
                                Le site pour uploader, et partager !
                            </cite>

                        </div>

                        <div class="col-lg-6 col-md-10 col-sm-10">

                            <nav>

                                <ul>
                                    <li><a href="redirection.php"><img src="img/Icon_Upload_Test.png" alt="Upload" width="50" height="50"></a></li>
                                    <li><a href="redirection.php"><img src="img/Icon_Image_Test.png" alt="Galerie" width="40" height="40"></a></li>
                                    <li><a href="connexion.php"><img src="img/Icon_Connexion_Test.png" alt="Connexion" width="50" height="50"></a></li>
                                    <li><a href="inscription.php"><img src="img/Icon_Inscription.png" alt="Inscription" width="40" height="40"></a></li>
                                </ul>

                            </nav>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <p class="champs">

                                <br> 

                                <?php
                                
                                include 'connect.php';
                                $requete = $dbh->prepare('INSERT INTO users VALUES(NULL, :pseudo, :prenom, :nom, :email, :password)');

                                if(!empty($_POST)){
                                    
                                    $users = $requete->fetchAll();

                                    if(empty($_POST['pseudo']) OR empty($_POST['prenom']) OR empty($_POST['nom']) OR empty($_POST['email']) OR empty($_POST['password'])){
                                        echo 'Veuillez remplir tous les champs !';
                                    }else{
                                        $requete->execute([
                                            ':pseudo' => htmlentities($_POST['pseudo']),
                                            ':prenom' => htmlentities($_POST['prenom']),
                                            ':nom' => htmlentities($_POST['nom']),
                                            ':email' => htmlentities($_POST['email']),
                                            ':password' => htmlentities($_POST['password'])  
                                        ]);
                                        header('Location:connexion.php');
                                    }

                                }



                                ?>

                            </p>

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


                                    <input type="submit" value="S'inscrire" class="inscrire"><br><br>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>