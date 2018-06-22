<?php 

class BaseDatos{

	public $base='randlab_bd';
	public $servidor='localhost';
	public $conexion;
	public $mysqli;


	public function __construct(){
		
		$this->conexion=mysqli_connect($this->servidor,'root','',$this->base) or die ("No se ha podido establecer conexion con la base de datos");
	

		$this->mysqli=new mysqli($this->servidor, 'root','', $this->base);

		$this->mysqli->set_charset("utf8");
	}



	









}//class


?>
