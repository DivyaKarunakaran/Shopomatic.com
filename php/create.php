<?php

$inputuser = $_POST['user'];
$inputpass = $_POST['password'];
$inputmail = $_POST['email'];
$taken = "false";
$database = "divya";
$password = "divya";
$username = "root";


	$connect = mysql_connect('localhost', $username, $password) or die ('unable to log into database');
	@mysql_select_db($database, $connect) or die ("unable to connect");

	mysql_query("INSERT INTO users VALUES('', '$inputuser', '$inputpass', '$inputmail')") or die ("error");
	

echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo "<p href=../index.html>Login</p>";
echo "</body>";
echo "</html>";

 header('Location: ../index.html');

mysql_close($connect);

?>



	


