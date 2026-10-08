<?php
    // include('../config/loginVerify.php');
    include('../config/connection.php');


    if(isset($_POST['enviar'])){
        $titulo    = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $resumo    = $_POST['resumo'];

        if(!empty($_FILES['imagem']['name'])){
            $UploadFoto = md5($_FILES['imagem']['name'].date('sihdmY'). ".jpg");
            $caminho    = "../assets/img/";

            move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho.$UploadFoto);
            $insere = $mysqli->query("INSERT INTO projetos(projetos_titulo, projetos_descricao, projetos_resumo, projetos_imagem)
            VALUES(
                '$titulo',
                '$descricao',
                '$resumo',
                '$UploadFoto'
            )");
            if($insere){
                header('Location:../index.php');
                exit;
            };
        };
    };


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Projeto Novo</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">        
        <input type="text" name="titulo" id="">
        <textarea name="descricao" id=""></textarea>
        <input class="form-control" type="file" name="imagem" id="formFile">
        <input type="text" name="resumo">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>