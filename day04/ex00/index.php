<?php
	session_start();
	if (isset($_GET['login'], $_GET['passwd']) && $_GET['submit'] === "OK") {
		print_r("change session\n");
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
	print_r(session_id()."\n");
?>
<html>
	<body>
		<form action="index.php" method="GET">
		Username: <input type="text" name="login" value="<?php echo $_SESSION["login"]; ?>"/>
			<br />
		Password: <input type="password" name="passwd" value="<?php echo $_SESSION["login"] ?>"/>
			<input type="submit" name="submit" value="OK"/>
		</form>
	</body>
</html>