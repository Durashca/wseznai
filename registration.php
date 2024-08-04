<?php
include 'config.php';

$link = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");

session_start(); // Начало сессии

if ($_SERVER["REQUEST_METHOD"] == "POST") { // нажатие на кнопку
    if (isset($_POST['reg_name']) && isset($_POST['reg_login']) && isset($_POST['reg_password'])) {
        $name = $_POST['reg_name'];
        $login = $_POST['reg_login'];
        $password = $_POST['reg_password'];

        // Проверка формата email
        if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
            echo "Некорректный формат email";
            echo '<br>';
            echo "<a href='index_new_to_PC.php'>вернуться на главную</a>";
            exit;
        }

        // Проверка длины пароля
        if (strlen($password) < 3) {
            echo "Пароль слишком короткий";
            echo '<br>';
            echo "<a href='index_new_to_PC.php'>вернуться на главную</a>";
            exit;
        }

        // Проверка существования пользователя с таким же логином
        $query = "SELECT * FROM users WHERE login =?";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "s", $login);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            echo "Пользователь с таким логином уже существует";
            exit;
        }


        // Регистрация нового пользователя
        $query = "INSERT INTO users (name, login, pass) VALUES (?,?,?)";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "sss", $name, $login, $password);
        mysqli_stmt_execute($stmt);

        // Получение id нового пользователя
        $userId = mysqli_insert_id($link);

        // Авторизация
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_login'] = $login;

        header("Location: index_new_to_PC.php");
        exit; // Важно завершить выполнение скрипта после перенаправления
    }
}
?>