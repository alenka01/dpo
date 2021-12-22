<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta http-equiv="Content-Type" content="text/html" />
        <title>Дополнительное образование</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/css.css" rel="stylesheet" />
		
    </head>
	<?php
/**
 * Created by PhpStorm.
 * User: 640kb
 * Date: 16/01/2020
 * Time: 16:48
 */

//Настраиваем подключение к базе данных
$servername = "127.0.0.1"; // ip
$username = "root@localhost"; // Имя пользователя mysql (Не забудьте, что у него должны быть права на нужную таблицу)
$password = "qwerty"; //Пароль для пользователя user
$db = "лабораторная работа 3"; // Название базы данных, к которой подключаетесь.
$conn = mysqli_connect($servername, $username, $password, $db); // Выполняем подключение

if (!$conn) { // Проверяем подключение к БД.
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

$sql = "SELECT * FROM пользователь"; // Можно добавить WHERE id>'1', чтобы искать по id или диапазону. Где menu - это название таблицы, к которой подключаетесь.
$result = mysqli_query($conn, $sql);