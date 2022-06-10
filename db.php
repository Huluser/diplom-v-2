<?php
// Подключаем библиотеку RedBeanPHP
require "libs/rb-mysql.php";

// Подключаемся к БД
R::setup(
	'mysql:host=localhost; port=5050; dbname=hoafly',
	'root',
	''
);

// Проверка подключения к БД
if (!R::testConnection()) die('No DB connection!');



session_start(); // Создаем сессию для авторизации



// try {
// $host = 'localhost';
// $port = 3306;
// $dbname = 'hoafly';
// $dsn = "mysql:host=$host; port=$port; dbname=$dbname";
// $username = 'root';
// $passwd = '';
// $db = new PDO($dsn, $username, $passwd);
// } catch (PDOException $e) {
// echo $e->getMessage();
// die();
// }