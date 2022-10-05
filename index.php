<?php

#Conteúdo do Header
require("view/header.php");
include "model/conexaoDB.php";


//session_start();
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'listarFuncionario';
}

switch ($pagina) {
    case 'cadastrarFuncionario':
        require('view/cadastrarFuncionario.php');
        break;
    case 'cadastrarUsuario':
        require('view/cadastrarUsuario.php');
        break;
    case 'reportarErro':
        require('view/reportarErro.php');
        break;
    case 'listarFuncionarios':
        require('view/listarFuncionario.php');
        break;
    case 'listarUsuarios':
        require('view/listarUsuarios.php');
        break;
    default:
        require('view/home.php');
        break;
}



#Conteúdo do Rodapé
require("view/footer.php");
