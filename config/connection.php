<?php
    require 'env.php';

    $host      = "HOST";
    $user      = "ROOT";
    $password  = "sua senha do banco aqui";
    $database  = "nome do seu banco";

    $mysqli= new mysqli($host, $user, $password, $database);
?>