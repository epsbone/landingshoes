<?php
require_once "../model/Users.php";

$users = new User();

$id_user = isset($_POST["id_user"])? limpiarCadena($_POST["id_user"]):"";
$nombre = isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$nickname = isset($_POST["nickname"])? limpiarCadena($_POST["nickname"]):"";
$phone = isset($_POST["phone"])? limpiarCadena($_POST["phone"]):"";

switch ($_GET["op"]){
    case 'guardaryeditar1' :
        if (empty($id_user)){
            $rspta=$users->insertar1($nombre,$nickname,$phone);
            echo $rspta ? "Usuario Registrado" : "Usuario no se Registro";
        }
        else {
            $rspta=$users->editar1($id_user,$nombre,$nickname,$phone);
            echo $rspta ? "Usuario Actualizado" : "Usuario no se Actualizo";
        }
    break;

    case 'desactivar1' :
        $rspta=$users->editar1($id_user);
        echo $rspta ? "Usuario Desactivado" : "Usuario no se Desactivo";
        

    break;

    case 'activar1' :
        $rspta=$users->editar1($id_user);
        echo $rspta ? "Usuario Activado" : "Usuario no se Activo";
        

    break;

    case 'mostrar1' :
        $rspta=$users->mostrar1($id_user);
        echo json_encode($rspta);
        

    break;

    case 'listar1' :
        $rspta=$users->listar1();
        $data = Array();

        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "0"=>$reg->id_user,
                "1"=>$reg->nombre,
                "2"=>$reg->nickname,
                "3"=>$reg->phone,
                "4"=>$reg->tipe
            );
        }
        $results = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($results);

    break;
    


}



?>