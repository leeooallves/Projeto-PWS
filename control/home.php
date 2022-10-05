<?php
session_start();

if (empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
    header('Location: ../index.php');
}
    //echo 'Admin logado';
