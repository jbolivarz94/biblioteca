<?php
class conectar{	

	public static function conexion(){
		
		try{
			//$conexion = new PDO ('mysql:localhost=localhost; dbname=biblioteca;','admin','Andromeda1!');
			$conexion = new PDO ('mysql:localhost=localhost; dbname=biblioteca;','root','32706440briian');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET UTF8");
			
		}catch(Exception $e){
			die ("Error".$e->getMessage());
			echo "Linea del error".$e->getLine();
		}
		return $conexion;
	}

}