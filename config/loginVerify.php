<?php
session_start();

if(!isset($_POST['id'])){
    if(isset($_COOKIE['lembrar'])){
    }else{
        header('Location: ../config/login.php');
    }
    }
?>