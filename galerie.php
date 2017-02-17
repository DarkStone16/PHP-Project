<?php

session_start();

if (!$_SESSION['connected']){
 header('Location:redirection.php');
}

