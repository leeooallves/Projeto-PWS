<?php
include "conexaoDB.php";
$login = $_POST['login'];
$senha = $_POST['senha'];
$erro = false;

$query_login = "SELECT * FROM usuarios WHERE email ='$login' AND senha='$senha'";

$consulta_user = mysqli_query($conexao, $query_login);

if (mysqli_num_rows($consulta_user) == 1) {
  session_start();
  $_SESSION['login'] = true;
  header('location:../index.php');
} else {
  header('location:index.php?erro=1');
}


/*
session_start();




if ((($login == 'adm@a' && $senha == 'adm') ||
  ($login == 'user3@consultasaldo' && $senha == 'user3saldo'))) {
  $_SESSION['login'] = true;
  //$_SESSION['nome'] = $_POST['nome'];

  header('location:index.php');
} else if (!empty($_POST)) {
  $erro = true;
}



/*if (!empty($_SESSION['logado']) && $_SESSION['logado']) {
    header('Location: paginaadmin.php');
}*/
//  require("../view/login.php");*/
