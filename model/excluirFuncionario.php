<?php

require('conexaoDB.php');

$id_funcionario = $_GET['id_funcionario'];

$query_excluir = "DELETE FROM usuarios WHERE `usuarios`.`id_usuario` = $id_funcionario";

mysqli_query($conexao, $query_excluir);

header('Location:../index.php?pagina=listarUsuarios');
