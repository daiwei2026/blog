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
		<a class="login" href="login.php">登陆</a>
		<a class="register" href="register.php">注册</a>
	</div>
	<div id="right">
		<form action="userlogin.php" method="post">
			用户名：<input type="text" name="user"><br>
			密码：<input type="password" name="password"><br>
			<input type="submit">
			<input type="reset">
		</form>
	</div>
	<div id="nav">
	</div>
</body>

</html>
