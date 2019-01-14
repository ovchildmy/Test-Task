<?
	session_start();

	require "config.php";

	global $admin;
	global $host;
	global $pass;


	$query = $_GET["query"];
  
	$regDash = "/\-/";
	$reg = "/.[^\:\w ]/u";

	//Замена "-" на .
	$data = preg_replace($regDash, ":", $_POST["data"]);
	$data = preg_replace($reg, "", $data);
	$userId = $_SESSION["userId"];
	$sql = "UPDATE db_users SET $query='$data' WHERE id = '$userId'";


	if(mysql_connect($host, $admin, $pass)){
			mysql_select_db($db);

      if(mysql_query($sql)) header("Location: /");
	}
?>