<?php
// Incluye la definición de la clase Usuario para poder recuperar datos desde el
// modelo.
include "../_modelos/usuario.php";

session_start();

// Procesa las solicitudes http GET
if (isset($_GET['logout'])) {
    // @session_start();
    session_destroy();
    header("Location: ../index.php");
    // Termina la ejecución del script en este punto
    die();
}

// Procesa las solicitudes http POST
if (isset($_POST['login'])) {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $result = Usuario::busca($usuario);

    if (!$result) {
        $_SESSION["autherr"] = 'No se encontró el usuario';
    } else {
        if ($password == $result->password) {
            $_SESSION['user_admin'] = $result->isAdmin;
            $_SESSION["autherr"] = "";
            header("Location: ../_controladores/consultaController.php");
            // Termina la ejecución del script en este punto
            die();
        } else {
            $_SESSION["autherr"] = 'El password es incorrecto';
        }
    }
    header("Location: ../index.php");
}
?>
