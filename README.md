# Projet_PHP_B1B_Jerome_Raphael_Nathan

**Création d’un site d’hébergement d’images en ligne **

Module de référence : Développer un site interactif en PHP
Durée estimée de la mission : 15 heures

** 1.	Mission **

La société 8gag souhaite avoir un outil pour héberger des photos, cet outil sera ouvert à tous.
**2.	Enjeux Objectifs**

-	Savoir gérer un upload de fichiers 
-	Gérer une connexion à une base de données 
-	Mettre en ligne un site 
**3.	Règles du jeu**

Pour ce développement vous devrez : 
-	Permettre l’upload de fichier (de façon sécurisée)
-	Enregistrer en BDD la liste des fichiers chargés sur le serveur avec la date, l’adresse IP et le lien vers le fichier 
-	Sur la page d’accueil il faudra voir les 5 dernières images chargées sur le site 
-	L’utilisateur pourra se créer un compte et voir ses uploads

Vous devrez obligatoirement travailler avec Git durant l’intégralité du projet.  Vous pourrez vous mettre en groupe, avec une limite de 3 personnes maximum par groupe.


 
**4.	Livrables**

Il vous sera demandé de transmettre un zip contenant l’ensemble de vos fichiers ainsi qu’un dump SQL de votre base de données. S’il y a des choses particulières à effectuer pour faire fonctionner le projet, merci de créer un fichier readme.md avec les consignes pour l’installation.  

**5.	Évaluation**

Structure et forme du document :	 
Upload de fichier	/4
Enregistrement en BDD	/4
Design 	/4
Affichage des informations sur la page d’accueil	/4
Sécurité (XSS, SQLI, LFI …)	/4
Bonus :	
Utilisation de la POO 	/3
Respect des PSR 	/1
Upload AJAX ou Drag&Drop 	/1
Mise en ligne du site 	/2
NOTE	/20

**6.	Ressources en lignes pour aller plus loin ! **

-	http://php.net/manual/fr/features.file-upload.post-method.php
-	http://php.net/manual/fr/function.finfo-file.php 
-	https://www.codecademy.com/learn/php
-	https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/lire-des-donnees-2

**7.	Ouverture d’esprit **
Source d’inspiration

Vous pouvez vous inspirer de sites existants comme : 
-	http://www.noelshack.com 
-	http://www.hostingpics.net 


Challenge personnel

Pour améliorer l’interface vous pouvez : 
-	Permettre l’upload en drag&drop 
-	Envoyer les fichiers en AJAX pour voir le pourcentage d’avancement

Trucs et astuces :

Pour sécuriser l’upload de fichiers il est très important de vérifier plusieurs points : 
-	L’extension du fichier 
-	La taille du fichier 
-	Le type MIME du fichier 

Il est très important que les fichiers ne soient affichables via le directory listing d’Apache, pour cela, regardez du côté du .htaccess et de la propriété indexes.

