<?php

$inputuser = $_POST['username'];
$inputmail = $_POST['email'];
$inputmsg = $_POST['message'];
$taken = "false";
$database = "divya";
$password = "divya";
$username = "root";


	$connect = mysql_connect('localhost', $username, $password) or die ('unable to log into database');
	@mysql_select_db($database, $connect) or die ("unable to connect");

	mysql_query("INSERT INTO queries VALUES('', '$inputuser', '$inputmail','$inputmsg')") or die ("error");
	

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



