<?php

	function getConexion(){
		$host="localhost";
		$user="root";
		$pass="";
		$bd="crud";
		$con =mysqli_connect($host,$user,$pass,$bd);
		return $con;
	}
?>