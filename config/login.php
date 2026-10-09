<?php
    session_start();
    require('connection.php');

    if(isset($_POST['enviar'])){
        $nome  = $mysqli->real_escape_string($_POST['nome']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $query = $mysqli->query("SELECT * FROM adm WHERE adm_nome='$nome' AND adm_senha='$senha'");
        if(!$query){
            die("Erro na query: ". $mysqli->error);
        }
        if($query->num_rows > 0){
            $usuario= $query->fetch_object();
            $_SESSION['id']= $usuario->adm_id;
                setcookie('lembrar', $usuario->adm_id, time() + 60*60*24*30, "/");
                header("Location: ../painel/painel.php");        
                exit;
        }else{
            echo"Credenciais incorretas";
        };
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" rel="stylesheet"></link>
    <title>Login</title>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center bg-light p-5 vh-100 bg-dark">
        <div class="container">
            <div class="row">
                <form method="post" class="bg-light p-5 border round-5">
                    <input type="text" class="mb-2 w-100" name="nome" placeholder="Nome de usuário" id="">
                    <input type="password" class="mb-2 w-100" name="senha" placeholder="Senha" id="">
                    <input type="submit" value="enviar" id="enviar" name="enviar">
                </form>
            </div>
        </div>
    </div>


</body>
</html>
