<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Восстановление пароля</title>

	<link rel="stylesheet" href="/css/fonts.css">
	<link rel="stylesheet" href="/css/recover.css">
</head>
<body>
	<article class="recover">
		<h1>Восстановление пароля</h1>	

		<form action="/pages/recoverAction.php" method="post">
			<section>Введите, пожалуйста, ваше имя или почту</section>
			<input name="value" type="text" placeholder="name@mail.com">
			<button>Отправить заявку</button>
		</form>	
	</article>
</body>
</html>