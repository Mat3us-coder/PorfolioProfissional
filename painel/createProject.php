<?php
    include('../config/loginVerify.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" rel="stylesheet"></link>
    <title>Cadastrar Projeto Novo</title>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center bg-light p-5 vh-100 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                     <form action="" class="bg-light p-5 border round-5" method="post" enctype="multipart/form-data">        
                        <h1>Criar Projeto</h1>
                        <input type="text" class="mb-2 w-100" name="titulo" placeholder="Título" id=""><br>
                        <textarea name="descricao" class="mb-2 w-100" id="" placeholder="Descrição"></textarea><br>
                        <input type="text" class="mb-2 w-100" class="mb-2" name="resumo" placeholder="Resumo"><br>
                        <label for="formFile">Imagem</label>
                        <input class="form-control mb-2 w-100" type="file" class="mb-2" name="imagem" id="formFile"><br>
                        <input type="submit" value="enviar" name="enviar"><br>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>
</html>