<?php
$title = "Форма регистрации"; // название формы
require "../blocks/header.php"; // подключаем шапку проекта
require "../db.php"; // подключаем файл для соединения с БД
?>

<main>
	<section>
		<? require_once "../db.php"; ?>

		<div class="container">
			<form action="../function/reg.php" class="form-signin" method="POST">
				<!-- <form action="../function/login.php" class="form-signin" method="POST"> -->
				<h2>Регистрация</h2>
				<br>
				<input type="text" name="login" class="form-control" placeholder="Введите номер договора"><br>
				<input type="text" name="name" class="form-control" placeholder="Введите имя" required><br>
				<input type="email" name="email" class="form-control" placeholder="Введите почту"><br>
				<input type="password" name="password" class="form-control" id="password-input" placeholder="Введите пароль"><br>
				<input type="password" name="password_2" class="form-control" id="password_2" placeholder="Повторите пароль"><br>
				<button type="submit" name="do_signup" class="btn btn-lg btn-outline-primary btn-block">Зарегистрироваться</button>

			</form>
			<br>
			<p>Если вы зарегистрированы, тогда нажмите <a href="avtorization.php">здесь</a>.</p>
			<p>Вернуться на <a href="../index.php">главную</a>.</p>
		</div>
	</section>
</main>

<? require "../blocks/footer.php";
