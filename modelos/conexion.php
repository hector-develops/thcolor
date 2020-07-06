<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=thcolor",
			            "root",
			            "th2021*clr");

		$link->exec("set names utf8");

		return $link;

	}

}