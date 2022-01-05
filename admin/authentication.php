<?php
session_start();
include('config/dbcon.php');

if (!isset($_SESSION['auth'])) {
    $_SESSION['message'] = "Faça login para acessar o painel";
    header("Location: ../login.php");
    exit(0);
} else {
    if ($_SESSION['auth_role'] != "1") {
        $_SESSION['message'] = "Voce não tem permissão de ADMIN";
        header("Location: ../login.php");
        exit(0);
    }
}
