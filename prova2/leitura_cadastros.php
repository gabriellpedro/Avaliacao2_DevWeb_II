<?php

    require_once('mysql_Conexao.php');

    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leitura Informações</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <p>
    <h1>Esta é a listagem dos dados presentes em nosso banco</h1>
    </p>
    <p>
        <a href="home.php" class="btn btn-danger">Voltar ao Home</a>  
        <br><br>     
        
        <a href="cadastro_dados.php" class="btn btn-primary">Voltar ao Cadastro</a>
    </p>

    <?php

    $sql = "SELECT * from madeiras";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo "<br>";
        echo "<table>Nome da madeira | Expessura | Nome Fabricante</th>";
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row["nome_madeira"]."</td><td>".$row["expessura_chapa"]." ".$row["empresa_fabricante"]."</td></tr>";
        }
    }
    ?>
    
</body>
</html>