<?php
require "../config/conexion.php";

Class Shoe
{
    public function __construct()
    {

    }

    public function insertar($name,$model,$color)
    {
        $sql = "INSERT INTO shoe (name,model,color,tipe)
        VALUES ('$name','$model','$color', '1')";
        return ejecutarConsulta($sql);
    }
    public function editar($shoe_id,$name,$model,$color)
    {
        $sql = "UPDATE shoe SET name = '$name', model = '$model', color ='$color'
            WHERE shoe_id = '$shoe_id";
        return ejecutarConsulta($sql);
}
    public function desactivar($shoe_id)
    {
        $sql = "UPDATE shoe SET tipe ='0' WHERE shoe_id = '$shoe_id'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($shoe_id)
    {
        $sql = "SELECT * FROM shoe WHERE shoe_id = '$shoe_id'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM shoe";
        return ejecutarConsulta($sql);
    }
}
    


?>