<?php

	$$mysqli = new mysqli("7xkuahi0.873.dnstoo.com","testliuyan_f","oamsemvz","testliuyan","5506");
	if($mysqli->connect_errno){
		die($mysqli->connect_error);
	}
	$mysqli->query("set names utf8");
	
	$sql = "SELECT COUNT (*) AS count FROM blog WHERE ldete = 0";
	
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();
	$josnStr = json_encode($row);
	echo $josnStr;
	
	$mysqli->close();
	
?>