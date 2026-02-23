<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div id="left">
	<?php
		require "common.php";
	?>
	</div>
	<div id="right">
		<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '@Passw0rd';
		$dbname = 'blog';
		$id = $_GET["id"];
		 
		// 创建连接
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die('连接失败: ' . $conn->connect_error);
		} 
		 
		$sql = 'SELECT * FROM blog WHERE id=' . $id;
		$result = $conn->query($sql);
		$row = $result->fetch_row();
		// 输出数据
		echo "<p>$row[2]</p><p>$row[3]</p><p>$row[4]</p><a href=blogBefore.php?id=" . $row[0] . ">modify</a><a href=delete.php?id=" . $row[0] . ">delete</a><br>";
		?>
	</div>
	<div id="nav">
		<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '@Passw0rd';
		$dbname = 'blog';
		$id = $_GET["id"];
		// 创建连接
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die('连接失败: ' . $conn->connect_error);
		} 
		if(!$_GET["category"]){
			$sql = "SELECT * FROM category LIMIT 1;";
			$result = $conn->query($sql);
			$category = $result->fetch_row()[0];
		}else{
			$category = $_GET["category"];
		}
		$sql = 'SELECT * FROM blog WHERE category=' . $category . ' AND id < ' . $id . ' ORDER BY id DESC LIMIT 1' ;
		$result = $conn->query($sql);
		$row = $result->fetch_row();
		if($row)
			echo "<a href='detail.php?id=" . $row[0] . "'>previews</a>";
		$sql = 'SELECT * FROM blog WHERE category=' . $category . ' AND id > ' . $id . ' ORDER BY id ASC LIMIT 1' ;
		$result = $conn->query($sql);
		$row = $result->fetch_row();
		if($row)
			echo "<a href='detail.php?id=" . $row[0] . "'>next</a>";
		?>
	</div>
</body>
</html>
