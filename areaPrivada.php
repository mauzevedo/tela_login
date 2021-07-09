<?php
    session_start();
    if (!isset($_SESSION['id_usuario'])){
        header("location: index.php");
        exit;
    }

    require_once 'classes/usuarios.php';
    $u = new Usuario;
?>

SEJA BEM VINDO, nome!!
<a href="sair.php"> Sair </a>