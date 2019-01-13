<form class="regForm" action="/pages/registration.php" method="post">
	<?
		if(isset($_GET["existAcc"])) echo "<p class='cabinet__warnExist'>Пользователь с таким именем уже зарегистрирован</p>"
	?>
	<img src="/img/reg.png" class="ico">
	<input name="login" type="text" placeholder="Имя" required>
	<input name="password" type="password" placeholder="Пароль" required>
	<input name="mail" type="email" placeholder="Почта" required>
	<button>Зарегистрироваться</button>
</form>