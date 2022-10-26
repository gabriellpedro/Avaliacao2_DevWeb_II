<?php

    require_once('acesso_Mysql.php');
    require_once('mysql_Conexao.php');

    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
        header("location: index.php");
        exit;
    }

    $sql = "INSERT INTO madeiras (nome_madeira, expessura_chapa, empresa_fabricante)
    VALUES ('".$_POST['nome_madeira']."','".$_POST['expessura_chapa']."','".$_POST['fabricante_madeira']."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Informações</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <p> 
        <a href="cadastro_dados.php" class="btn btn-primary">Voltar ao Cadastro</a>
        <br><br>
        <a href="home.php" class="btn btn-danger">Voltar ao Home</a>
    </p>
</body>
</html>
