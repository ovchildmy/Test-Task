<?
	session_start();

	require "config.php";

	global $admin;
	global $host;
	global $pass;

	// Фильтрация спец.символов для безопасности
	$login = preg_replace("/\W/u", "", $_POST["login"]);
	$password = preg_replace("/\W/", "", $_POST["password"]);
	$mail = preg_replace("/\W@/", "", $_POST["mail"]);
	$sqlInsert = "INSERT INTO db_users(name, password, mail) 
					VALUES('$login','$password','$mail')";
	$sqlSelect = "SELECT * FROM db_users WHERE name='$login'";



	if(mysql_connect($host, $admin, $pass)){
		mysql_select_db($db);

		$existAcc = mysql_fetch_assoc(mysql_query($sqlSelect));
		if(!empty($existAcc)) {
			header("Location: /?existAcc");
		} else {
			mysql_query($sqlInsert);

			// Получение нового Id
			// Инкрементации нет, потому что запрос уже прошёл
			$getLastId = mysql_query("SELECT id FROM db_users 
																ORDER BY id DESC LIMIT 1");
			$getLastId = mysql_fetch_assoc($getLastId);
			$lastId = intval($getLastId["id"]);


			$_SESSION["userId"] = $lastId;
			header("Location: /");
		};
		

	}
?>