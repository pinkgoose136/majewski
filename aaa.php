<?php
// Подключение к базе данных
$mysqli = new mysqli("localhost", "пользователь", "пароль", "имя_базы_данных");

// Проверка соединения
if ($mysqli->connect_error) {
    die("Ошибка подключения к базе данных: " . $mysqli->connect_error);
}

// Получение данных из формы
$имя = $_POST['имя'];
$email = $_POST['email'];

// SQL-запрос для вставки данных в базу данных
$sql = "INSERT INTO ваша_таблица (имя, email) VALUES ('$имя', '$email')";

if ($mysqli->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных";
} else {
    echo "Ошибка: " . $sql . "<br>" . $mysqli->error;
}

// Закрытие соединения с базой данных
$mysqli->close();
?>
