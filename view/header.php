<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body class="body">


    <header>
        <div class="faixaAzul"></div>
        <div class="limitesInternos">
            <h1 class="titulo">Projeto</h1>
            <div class="menu">
                <a class="itemMenu" href="?pagina=home">Home</a>
                <a class="itemMenu" href="?pagina=listarFuncionarios">Funcionário</a>
                <a class="itemMenu" href="?pagina=listarUsuarios">Usuário</a>
                <a class="itemMenu" href="?pagina=reportarErro">Reportar Erro</a>
                <?php if (isset($_SESSION['login'])) { ?>
                    <a class="itemMenu" href="../control/logout.php">Sair</a>
                <?php } ?>

            </div>
        </div>
    </header>