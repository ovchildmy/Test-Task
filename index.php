<?
	session_start();
	if(isset($_SESSION["userId"])) header("Location: /pages/cabinet.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Test Task</title>
	
	<link rel="stylesheet" href="/css/core.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<?
		$page = $_GET["pg"];
		echo "<link rel='stylesheet' href='/css/" . (!empty($page) ? $page  : "startForm") . ".css'>";
	?>
</head>
<body>

	<?

		require "/pages/" . (!empty($page) ? $page  : "form") . ".php";
	?>
	
</body>
</html>