<?php
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

// echo "$titulo : $descricao";

include "conexao.php";
$sql ="insert into tarefas(titulo, descricao) values('$titulo',
 '$descricao')";
echo $sql;

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location:index.php");


?>