<?php

$host = "localhost";
$usoario = "root";
$senha = "";
$bd = "conexao";

function mysql(){

$conexao = new mysqli($host, $usoario, $senha, $bd);

$mostra = $conexao -> query("SHOW DATABASES");

while($linha = mysqli_fetch_array($mostra)){
    print_r($linha[0]);
    echo "</br>";
}
}
echo mysql();
?>