<?
	session_start();

	require "config.php";

	global $admin;
	global $host;
	global $pass;


	$query = $_GET["query"];

	$reg = "/.[^\w ]/u";
	$data = preg_replace($reg, "", $_POST["data"]);
	$userId = $_SESSION["userId"];
	$sql = "UPDATE db_users SET $query='$data' WHERE id = '$userId'";

	if(mysql_connect($host, $admin, $pass)){
			mysql_select_db($db);

			if(mysql_query($sql)) header("Location: /");
	}
?>