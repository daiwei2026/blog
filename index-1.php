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
		if(!$_GET["category"]){
			$sql = "SELECT * FROM category LIMIT 1;";
			$result = $conn->query($sql);
			$category = $result->fetch_row()[0];
		}else{
			$category = $_GET["category"];
		}
		 
		// 创建连接
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die('连接失败: ' . $conn->connect_error);
		} 
		 
		$sql = 'SELECT * FROM blog WHERE category=' . $category;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// 输出数据
			while($row = $result->fetch_assoc()) {
				echo "<a href='detail.php?id=" . $row["id"] . "'>" . $row["title"] . "</a><br>";
			}
		} else {
			echo "0 结果";
		}
		echo "<a href='newBlog.php?category=" . $category . "'>newBlog</a>";
		?>
	</div>
</body>
</html>
