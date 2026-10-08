<?php
    require 'env.php';

    $host      = $_ENV['HOST'];
    $user      = $_ENV['USER'];
    $password  = $_ENV['PASSWORD'];
    $database  = $_ENV['DATABASE'];

    $mysqli= new mysqli($host, $user, $password, $database);
?>