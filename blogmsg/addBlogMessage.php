<?php 
	
	$message = $_GET["message"];

	$mysqli = new mysqli("7xkuahi0.873.dnstoo.com","testliuyan_f","oamsemvz","testliuyan","5506");
	if ($mysqli->connect_errno) {
		die($mysqli->connect_error);
	}

	$mysqli->query("set names utf8");

//获取服务器的时间
	date_default_timezone_set("Asia/Shanghai");
	$ptime = $_SERVER["REQUEST_TIME"];
	
	$sql = "INSERT INTO blog (message,ptime) VALUES('$message','$ptime')";
	$result = $mysqli->query($sql);
        printf($result);
	if ($result) {
		$sql = "SELECT * FROM blog WHERE ptime = '$ptime'";
		$res = $mysqli->query($sql);
		$row = $res->fetch_asssoc();
		$jsonStr = json_encode($row);
		echo $jsonStr;
	}
	$mysqli->close();

 ?>