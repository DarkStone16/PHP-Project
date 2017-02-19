<?php

require 'connect.php';
$stmt = $dbh->prepare('SELECT * FROM images WHERE picture = :picture ORDER BY id DESC');
$stmt->execute([':picture' => $pixName]);
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Emblema+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>UrPics</title>

    </head>

    <body>


        <div class="lastpics">

            <p class="title1">
                NOS DERNIERES IMAGES
            </p>

            <div class=image1>

            </div>


            <div class="bs-example" data-example-id="simple-thumbnails">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="" data-holder-rendered="true"> </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="" data-holder-rendered="true"> </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="" data-holder-rendered="true"> </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="#" class="thumbnail"> <img alt="100%x180" data-src="holder.js/" style="height: 180px; width: 100%; display: block;" src="" data-holder-rendered="true"> </a>

                    </div>
                </div>
            </div>


        </div>




    </body>

    </html>