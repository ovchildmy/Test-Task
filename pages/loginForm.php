<form class="loginForm" action="/pages/login.php" method="post">
	<img style='<? if(isset($_GET["existAcc"])) echo "width:170px"; ?>' class="ico" src="/img/login.png">

	<input required name="name" type="text" placeholder="Имя">
	<input required name="password" type="password" placeholder="Пароль">
	<button>Войти</button>


	<? if(isset($_GET["warning"])): ?>
		<div class="warning">Неправильно введён логин или пароль</div>
	<? endif; ?>

	<p class="forgetPass"><a href="/pages/recover.php">Забыли пароль?</a></p>
</form>
