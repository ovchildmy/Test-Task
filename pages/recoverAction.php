<?
	require "config.php";

	global $admin;
	global $host;
	global $pass;

	$text = preg_replace("/.[^\w ]/u", "", $_POST["value"]);
	$sql = "SELECT * FROM db_users WHERE name='$text' OR mail='$text'";

	if(mysql_connect($host, $admin, $pass)){
		mysql_select_db($db);

		if($pass = mysql_fetch_assoc(mysql_query($sql))){
			$mail = $pass["mail"];
			$subj = "Восстановление пароля";
			$password = "Ваш пароль: " . $pass["password"];

			mail($mail, $subject, $password);
			header("Location: /");
		} 
	}
?>