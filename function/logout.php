<?php
require '../blocks/header.php'; // подключаем шапку проекта
require "../db.php"; // подключаем файл для соединения с БД
session_start();
// Производим выход пользователя
unset($_SESSION['logged_user']);

// Редирект на главную страницу
header('Location: ../index.php');

require '../blocks/footer.php'; // Подключаем подвал проекта
