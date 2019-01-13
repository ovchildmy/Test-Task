<?
	session_start();

	if(!isset($_SESSION["userId"])){
		header("Location: /");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="/css/core.css">
	<link rel="stylesheet" href="/css/cabinet.css">
	<link rel="stylesheet" href="/css/fonts.css">
</head>
<body>
	<?
		// Редирект на главную при отсутствии авторизации

		

		require "config.php";

		global $admin;
		global $host;
		global $pass;

		$userId = $_SESSION["userId"];
		$sql = "SELECT * FROM db_users WHERE id='$userId'";

		if(mysql_connect($host, $admin, $pass)):
			mysql_select_db($db);

			$res = mysql_query($sql);

	?>

	<table class="cabinet__table">
		<?	while($cell = mysql_fetch_assoc($res)): ?>
			<tr>
				<td>имя</td>
				<td data-placeholder="ё имя" data-query="name"><?=$cell["name"]?></td>
			</tr>
			<tr>
				<td>фамилия</td>
				<td data-placeholder="ю фамилию" data-query="surname"><?=$cell["surname"]?></td>
			</tr>
			<tr>
				<td>Дата рождения</td>
				<td data-date="true" data-placeholder="ю дату рождения" data-query="birthday"><?=$cell["birthday"]?></td>
			</tr>
			<tr>
				<td>Место рождения</td>
				<td data-placeholder="ё место рождения" data-query="placebirthday"><?=$cell["placebirthday"]?></td>
			</tr>
			<tr>
				<td>профессия</td>
				<td data-placeholder="ю профессию" data-query="profession"><?=$cell["profession"]?></td>
			</tr>
			<tr>
				<td>Интересы</td>
				<td data-ta="true" data-placeholder="и интересы" data-query="interests"><?=$cell["interests"]?></td>
			</tr>	
		<? endwhile; ?>
	</table>

	<? endif; ?>

	<div class="cabinet__animationBlock cabinet__animationBlock-1"></div>
	<div class="cabinet__animationBlock cabinet__animationBlock-2"></div>

	<div class="cabinet__ask">?</div>
	<a href="/pages/exit.php">
		<div title="Выйти" class="cabinet__quit"><img src="/img/exit.png"></div>
	</a>

	<article class="cabinet__popup-ask popup">
		<div>
			<p>Нажмите на одну из ячеек, чтобы изменить её</p>
			<img class="cross cabinet__popup-ask__cross" src="/img/cross.png">
		</div>
	</article>

	<script src="/js/fillForm.js"></script>
	<script src="/js/createPopupCabinet.js"></script>
</body>
</html>