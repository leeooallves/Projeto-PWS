<?php
    $host="localhost";
    $user="root";
    $senha="";
    $banco="projetows";

    try {

        $conexao= new PDO("mysql:host=$host; dbname=$banco", $user, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           // echo 'Novos dados inseridos';
          //  echo "o nome é: $nome";

    } catch(PDOException $e) {
        echo "Erro de conexao<br>".$e->getMessage();
    }
    //encerrar conexao: $bd = null;

?>
