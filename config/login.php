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
            $usuario          = $query->fetch_object();
            $_SESSION['id']   = $usuario->adm_id;
            if(isset($_POST['lembrar'])){
                setcookie('lembrar', $usuario->adm_id, time() + 60*60*24*30);
            };
            header("Location: ../index.php");
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
    <title>Document</title>
</head>
<body>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome de usuário" id="">
        <input type="password" name="senha" placeholder="Senha" id="">
        <input type="checkbox" name="lembrar"  id="lembrar">
        <label for="lembrar">Lembrar de mim</label>

        <input type="submit" value="enviar" name="enviar">
    </form>

</body>
</html>