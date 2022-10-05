<?php

include '../model/conexaoDB.php';


$nome = $_POST['cNome'];
$sobrenome = $_POST['cSobrenome'];
$email = $_POST['cEmail'];
$senha = $_POST['cSenha'];
$telefone = $_POST['cTelefone'];
$cargo = $_POST['cCargo'];

$query = "INSERT INTO usuarios (nome, sobrenome, email, senha, telefone, cargo) 
VALUES ( '$nome', '$sobrenome', '$email', '$senha', '$telefone', '$cargo')";

try {
    //code...

    mysqli_query($conexao, $query);
} catch (\Throwable $th) {
    echo $th;
}
header('Location:../index.php?pagina=listarUsuarios');
