<?php
require "../config/conexion.php";

Class User
{
    public function __construct()
    {

    }

    public function insertar1($nombre,$nickname,$phone)
    {
        $sql = "INSERT INTO users (nombre,nickname,phone,tipe)
        VALUES ('$nombre','$nickname','$phone', '1')";
        return ejecutarConsulta1($sql);
    }
    public function editar1($id_user,$nombre,$nickname,$phone)
    {
        $sql = "UPDATE users SET nombre = '$nombre', nickname = '$nickname', phone ='$phone'
            WHERE id_user = '$id_user";
        return ejecutarConsulta($sql);
}
    public function desactivar1($id_user)
    {
        $sql = "UPDATE users SET tipe ='0' WHERE id_user = '$id_user'";
        return ejecutarConsulta($sql);
    }

    public function mostrar1($id_user)
    {
        $sql = "SELECT * FROM users WHERE id_user = '$id_user'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar1()
    {
        $sql = "SELECT * FROM users";
        return ejecutarConsulta($sql);
    }
}
    


?>