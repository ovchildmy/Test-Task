<?
	require "config.php";

	global $admin;
	global $host;
	global $pass;

	// Фильтрация спец.символов для безопасности
	$login = preg_replace("/\W/u", "", $_POST["name"]);
	$password = preg_replace("/\W/u", "", $_POST["password"]);
	$sql = "SELECT * FROM db_users";

	if(mysql_connect($host, $admin, $pass)){
		mysql_select_db($db);
		
		$res = mysql_query($sql);

		while ($cell = mysql_fetch_assoc($res)) {
			//Проверка на совпадение логина и пароля
			if($login == $cell["name"] && $password == $cell["password"]){
				session_start();
				
				$_SESSION["userId"] = $cell["id"];
				
				header("Location: /pages/cabinet.php");

			} else header("Location: /?warning");
		}
	}
?>