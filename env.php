<?php 
	try{
		$mbd = new PDO('mysql:host=localhost; dbname=db_crm;', 'daranibar', 'daranibar', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
	}catch(PDOException $e){
		echo "Fallo en la conexion ".$e->getMessage();
	}
?>