<?php

require_once "conexion.php";

class ModeloProducto{

    static public function crearProducto(){

    }

    static public function mostrarProducto($tabla, $item, $valor){

        if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE status_productos=1");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;
    }

    static public function actualizarProducto(){

    }

    static public function eliminarProducto(){

    }
}