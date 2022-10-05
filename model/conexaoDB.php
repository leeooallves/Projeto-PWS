<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$database = "projeto";
#Conexão com o banco de dados
$conexao = mysqli_connect($servidor, $user, $senha, $database);

$query_funcionarios = 'SELECT * FROM funcionarios';
$consulta_funcionarios = mysqli_query($conexao, $query_funcionarios);

$query_usuarios = 'SELECT * FROM usuarios';
$consulta_usuarios = mysqli_query($conexao, $query_usuarios);


/*function consulta()
{
    $servidor = "localhost";
    $user = "root";
    $senha = "";
    $database = "projeto";
    #Conexão com o banco de dados
    $conexao = mysqli_connect($servidor, $user, $senha, $database);
}

function funcionarios()
{
    $query = 'SELECT * FROM funcionarios';
    $consulta = mysqli_query(consulta(), $query);

    return $consulta;
}*/
