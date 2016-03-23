<?php
$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];
$database = "divya";
$password = "divya";
$username = "root";



	$connect = mysql_connect('localhost', $username, $password);
	@mysql_select_db($database, $connect) or ("unable to connect");




$query = "SELECT * FROM users WHERE user = '$inputuser'";
$querypass = "SELECT * FROM users WHERE password = '$inputpass'";

echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";
echo "</body>";
echo "</html>";


$result = mysql_query($query);
$resultpass = mysql_query($querypass);

$row = mysql_fetch_array($result);
$rowpass = mysql_fetch_array($resultpass);

$serveruser = $row["user"];
$serverpass = $row["password"];

 if($serveruser && $serverpass)
 {
 	if (!$result)
 	{
 		die("username or password is invalid");
 	}
 	echo "<br><center> Database output</b></center><br><br>";

 	mysql_close();
 	echo $inputpass;
 	echo $serverpass;

 	if($inputpass == $serverpass)
 	{
	 header('Location: home.php');
 	}
 	else
 	{
 	header ('Location: fail.php');
 	}
 }

?>
