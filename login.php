<?php 
session_start();
include_once 'koneksi.php';
if (isset($_SESSION["username"])) {
}
?>
<!DOCTYPE html>
<html>
<body>
	<center> <font size="10">Form Login<br><br></font> 
		<table><form action="login.php" method="POST">
		<input type="text" name="nim" placeholder="nim"><br><br>
		<input type="password" name="password" placeholder="Password"><br><br>
		<input type="submit" name="submit" value="kirim">
	</table>
</body>
</html>
