<?php

session_start();

if(!empty($_SESSION)){
    session_destroy();
    header('Location:index.php');
}else{
    header('Location:index.php');
}
