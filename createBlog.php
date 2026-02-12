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
			$servername = "localhost";
			$username = "root";
			$password = "@Passw0rd";
			$dbname = "blog";
			 
			// 创建连接
			$conn = new mysqli($servername, $username, $password, $dbname);
			// 检测连接
			if ($conn->connect_error) {
				die("连接失败: " . $conn->connect_error);
			} 

			$conn->query("SET NAMES UTF8");
			date_default_timezone_set("Asia/Shanghai");
			 
			$sql = "INSERT INTO blog (category,title,content,date) VALUES ('" . $_GET["category"] . "','" . $_POST["title"] . "','" . $_POST["content"] . "','" . date("Y 年 m 月 d 日 H 点 i 分 s 秒") . "')";
			 
			if ($conn->query($sql) === TRUE) {
				echo $id = $conn->insert_id;
				echo "新记录插入成功";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			 
			$conn->close();
		?>
	</div>
</body>
</html>
