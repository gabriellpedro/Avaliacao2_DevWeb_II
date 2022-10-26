<?php

require_once('./acesso_Mysql.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
echo "Conectado com sucesso";
?>