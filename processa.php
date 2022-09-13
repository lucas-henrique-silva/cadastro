<?php

include_once("conexao.php");

// Pegando os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome,email,profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>