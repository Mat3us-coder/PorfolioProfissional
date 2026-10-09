<?php
    require __DIR__ . "/../config/connection.php";
    include('../config/loginVerify.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" rel="stylesheet"></link>
    <title>Painel</title>
</head>

<body class="bg-dark vh-100">
    <div class="d-flex align-itemts-center justify-content-center bg-light m-5">

        <table class="table table-striped">
            <a class="btn btn-success btn-sm" href="../index.php">Voltar</a>
            <thead>
                <tr>
                    <th scope='col'>
                        ID
                    </th>
                    <th scope='col'>
                        Título
                    </th>
                    <th scope='col'>
                        Descrição
                    </th>
                    <th scope='col'>
                        Resumo
                    </th>
                    <th scope='col'>
                        Imagem
                    </th>
                    <th scope='col'>
                        Controle
                    </th>
                    <th scope='col'>
                        <a class="btn btn-success btn-sm" href="createProject.php"> Cadastrar novo projeto</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php

                    if(isset($_GET['deletar'])){
                        if(isset($_GET['projetos_id'])){
                            $id = $_GET['projetos_id'];
                            $mysqli->query("DELETE FROM projetos WHERE projetos_id= '$id'");
                        }
                    }
                    $query = "SELECT * FROM projetos";
                    $puxa = $mysqli->query($query);
                    while($mostra = $puxa->fetch_object()){
                        echo"
                            <tr>
                                <th scope='row'>{$mostra->projetos_id}</th>
                                <td>" .substr($mostra->projetos_titulo,0,20) . "...</td>
                                <td>" .substr($mostra->projetos_descricao,0,20) . "...</td>
                                <td>" .substr($mostra->projetos_resumo,0,20) . "...</td>
                                <td>" .substr($mostra->projetos_imagem,0,20) . "...</td>
                                <td>
                                    <a class='btn btn-dark' href='painel.php?deletar=sim&projetos_id=$mostra->projetos_id'>
                                        Excluir
                                    </a>
                                    </br>
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='editProject.php?editar=sim&projetos_id=$mostra->projetos_id'>
                                    Editar
                                    </a>
                                    </br>
                                </td>
                            </tr>
                        ";
                    }

                ?>
            </tbody>
        </table>

    </div>
</body>


</html>
