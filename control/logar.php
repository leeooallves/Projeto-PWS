<?php
$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';
$erro = false;

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
//  require("../view/login.php");
