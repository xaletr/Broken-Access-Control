
<!DOCTYPE html>
<html>
<head>
	<title>vulnerable application</title>
</head>
<body>
	<center>
<form method="GET">
<input type="text" name="login">
<input type="submit" name="gonder">
</form>
<?php
error_reporting(0);
$login = htmlspecialchars($_GET['login']);
echo $login;
if($login == "true") {
	echo "<h1>Logined</h1>";
}
?>
</center>
</body>
</html>
