<?
	echo "<link rel='stylesheet' href='/css/startForm.css'>";
?>
<article class="form">
	<nav>
		<ul>
			<li class="form--link form--active">Войти</li>
			<li class="form--link">Зарегистрироваться</li>
		</ul>
	</nav>

	<section class="form__wrapper">
		<?
			require "loginForm.php";
			require "regForm.php";
		?>
	</section>
</article>


<script src="/js/existAcc.js"></script>
<script src="/js/startForm.js"></script>