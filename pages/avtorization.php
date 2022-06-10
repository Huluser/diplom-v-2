<?php
$title = "Форма авторизации"; // название формы
require "../blocks/header.php"; // подключаем шапку проекта
require "../db.php"; // подключаем файл для соединения с БД
?>
<main>
	<section>
		<div class="container mt-4">
			<div class="row">
				<div class="col">
					<!-- Форма авторизации -->
					<h2>Форма авторизации</h2>
					<form action="../function/login.php" method="POST">
						<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
						<input type="password" class="form-control" name="password" id="pass" placeholder="Введите пароль" required><br>
						<button class="btn btn-success" name="do_login" type="submit">Авторизоваться</button>
					</form>
					<br>
					<p>Если вы еще не зарегистрированы, тогда нажмите <a href="registration.php">здесь</a>.</p>
					<p>Вернуться на <a href="../index.php">главную</a>.</p>
				</div>
			</div>
		</div>
	</section>
</main>

<? require "../blocks/footer.php";
