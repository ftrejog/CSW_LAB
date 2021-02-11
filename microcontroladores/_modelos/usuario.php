<?php
include('../database_connection.php');

/**
 * Clase Usuario
 * Representa un registro de usuario en la base de datos.
 */
class Usuario
{
    public $usuario;            // Nombre de usuario
    public $password;           // Contraseña
    public $isAdmin;            // Indica si es administrador

    // Busca por nombre de usuario. Devuelve un único registro.
    public static function busca($usuario)
    {
        GLOBAL $connection;
        $query = $connection->prepare("SELECT * FROM usuarios WHERE usuario=:usuario;");
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $usuario = new Usuario();
            $usuario->usuario = $result['usuario'];
            $usuario->password = $result['password'];
            $usuario->isAdmin = $result['admin'];

            return $usuario;
        }
    }
}
?>
