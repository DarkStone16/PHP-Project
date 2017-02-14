
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
// L'utilisateur a envoyé l'image
if (!empty($_FILES)) {
    $mime_valid = ['image/png', 'image/jpeg','image/gif'];
    $extension_valid = ['png', 'jpeg','jpg','gif'];
    $extension = pathinfo($_FILES['uploadDeFichier']['name'])['extension'];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $_FILES['uploadDeFichier']['tmp_name']);
    // test le mime & l'extension avec pathinfo() -- On ne veut que des fichiers PNG
    if(in_array($extension, $extension_valid) && in_array($mime, $mime_valid)){
        move_uploaded_file($_FILES['uploadDeFichier']['tmp_name'], 'uploads/' . $_FILES['uploadDeFichier']['name']);
        echo 'Done';
    } else {
        echo 'Erreur de format';
    }
}
?>

<form method="post" action="reception.php" enctype="multipart/form-data">
    <label for="icone">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
    <input type="file" name="icone" id="icone" /><br />
    <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="mon_fichier" id="mon_fichier" /><br />
    <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
    <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
    <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
    <textarea name="description" id="description"></textarea><br />
    <input type="submit" name="submit" value="Envoyer" />
</form>
