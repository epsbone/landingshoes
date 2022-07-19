<?php
require_once "../model/Shoe.php";

$shoe = new Shoe();

$shoe_id = isset($_POST["shoe_id"])? limpiarCadena($_POST["shoe_id"]):"";
$name = isset($_POST["name"])? limpiarCadena($_POST["name"]):"";
$model = isset($_POST["model"])? limpiarCadena($_POST["model"]):"";
$color = isset($_POST["color"])? limpiarCadena($_POST["color"]):"";

switch ($_GET["op"]){
    case 'guardaryeditar' :
        if (empty($shoe_id)){
            $rspta=$shoe->insertar($name,$model,$color);
            echo $rspta ? "Usuario Registrado" : "Usuario no se Registro";
        }
        else {
            $rspta=$users->editar($shoe_id,$name,$model,$color);
            echo $rspta ? "Usuario Actualizado" : "Usuario no se Actualizo";
        }
    break;

    case 'desactivar' :
        $rspta=$shoe->editar($shoe_id);
        echo $rspta ? "Usuario Desactivado" : "Usuario no se Desactivo";
        

    break;

    case 'activar' :
        $rspta=$shoe->editar($shoe_id);
        echo $rspta ? "Usuario Activado" : "Usuario no se Activo";
        

    break;

    case 'mostrar' :
        $rspta=$shoe->mostrar($shoe_id);
        echo json_encode($rspta);
        

    break;

    case 'listar' :
        $rspta=$shoe->listar();
        $data = Array();

        while ($reg=$rspta->fetch_object()){
            $data[] = array(
                "0" => '<button class="btn btn-warning" onclick="mostrar('.$reg->shoe_id.')"><i class="fa fa-edit"></i></button>',
                "1" =>$reg->name,
                "2" =>$reg->model,
                "3" =>$reg->color
                

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