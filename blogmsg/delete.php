<?php
	$name = $_POST["name"];
	$text = $_POST["text"];
	$mysqli = new mysqli("localhost","root","","Sh160301");
	if($mysqli -> connect_errno){		
		die($mysqli -> connect_error);		
	}
	
	$sql = "DELETE FROM weibo WHERE name='$name'&&text='$text'";		
	
	$mysqli->query("set names utf8");	
	
	$result = $mysqli->query($sql);
	var_dump($result);
	if($result){
		echo "删除成功";
	}
	
	//关闭数据库
	$mysqli->close();

?>




















