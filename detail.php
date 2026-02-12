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
		ini_set('display_errors', 'On');
		$servername = 'localhost';
		$username = 'root';
		$password = '@Passw0rd';
		$dbname = 'blog';
		 
		// 创建连接
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die('连接失败: ' . $conn->connect_error);
		} 
		 
		$sql = 'SELECT * FROM category';
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// 输出数据
			while($row = $result->fetch_assoc()) {
				echo "<a href='index-1.php?category=" . $row["id"] . "'>" . $row["name"] . "</a><a href=before.php?id=" . $row["id"] . ">modify</a><a href=delete.php?id=" . $row["id"] . ">delete</a><br>";
			}
		} else {
			echo "0 结果";
		}
		echo "<a href='newCategory.php'>newCategory</a>";
	?>
	</div>
	<div id="right">
		<?php
		ini_set('display_errors', 'On');
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
		echo "<p>$row[2]</p><p>$row[3]</p><p>$row[4]</p><a href=before.php?id=" . $row[0] . ">modify</a><a href=delete.php?id=" . $row[0] . ">delete</a><br>";
		?>
	</div>
</body>
</html>
