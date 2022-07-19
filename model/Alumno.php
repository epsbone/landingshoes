<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class alumno
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Método para insertar registros
	public function insertar1($nombre, $apodo, $tel, $correo, $foto,$nacimiento,$lic,$maes, $doc, $resumen, $pass, $fk_carr, $fk_duracion)
	{
		$sql="INSERT INTO alumno (nombre, apodo, tel, correo, foto,nacimiento,lic,maes, doc, resumen, pass, fk_carr, fk_duracion)
		VALUES ('$nombre', '$apodo', '$tel', '$correo', '$foto',$nacimiento','$lic','$maes', '$doc', '$resumen', '$pass', '$fk_carr', '$fk_duracion')";
		return ejecutarConsulta($sql);
	}

	//Método para editar registros
	public function editar1($id_al,$nombre, $apodo, $tel, $correo, $foto,$nacimiento,$lic,$maes, $doc, $resumen, $pass, $fk_carr, $fk_duracion)
	{
		$sql="UPDATE alumno SET nombre='$nombre', apodo='$apodo', tel='$tel', correo='$correo', foto='$foto',nacimiento='$nacimiento',lic='$lic',maes='$maes', doc='$doc', resumen='$resumen', pass='$pass', fk_carr='$fk_carr', fk_duracion='$fk_duracion'  WHERE id_al='$id_al'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar1 los datos de un registro a modificar
	public function mostrar1($id_al)
	{
		$sql="SELECT * FROM alumno WHERE id_al='$id_al'";
		return ejecutarConsultaSimpleFila($sql);
	}
	//Implementar un método para listar1 los registros
	public function listar1()
	{
		$sql="SELECT * FROM alumno";
		return ejecutarConsulta($sql);		
	}
}

?>