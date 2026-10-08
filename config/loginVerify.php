<?php
session_start();

if(!isset($_POST['id'])){
    if(isset($_COOKIE['lembrar'])){
        header('Location: ../index.php');
    }else{
    } header('Location: ../config/login.php');
}
?>