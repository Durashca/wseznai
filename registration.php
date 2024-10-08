<?php
include 'config.php';

$link = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");



if ($_SERVER["REQUEST_METHOD"] == "POST") { // нажатие на кнопку
    if (isset($_POST['reg_name']) && isset($_POST['reg_login']) && isset($_POST['reg_password'])) {
        $name = $_POST['reg_name'];
        $login = $_POST['reg_login'];
        $password = $_POST['reg_password'];
        $age = $_POST['reg_age'];

        // Проверка формата email
        if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
            echo "Некорректный формат email";
            echo '<br>';
            echo "<a href='index.php'>вернуться на главную</a>";
            exit;
        }

        // Проверка длины пароля
        if (strlen($password) < 3) {
            echo "Пароль слишком короткий";
            echo '<br>';
            echo "<a href='index.php'>вернуться на главную</a>";
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
        // Хеширование пароля
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (name, login, pass) VALUES (?,?,?)";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "sss", $name, $login, $hashed_password);
        mysqli_stmt_execute($stmt);

        // Получение id нового пользователя
        $userId = mysqli_insert_id($link);

        // Добавление записи в таблицу progress
        $query = "INSERT INTO progress (id, new_to_PC, age) VALUES (?, 0, ?)";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "is", $userId, $age);
        mysqli_stmt_execute($stmt);

        // Авторизация
        session_destroy(); // Уничтожьте все существующие сессии
        session_start(); // Начните новую сессию для нового пользователя
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_mail'] = $login;
        $_SESSION['user_progress'] = 0; // добавьте эту строку
        

        header("Location: the_memo.php");
        exit; // Важно завершить выполнение скрипта после перенаправления
    }
}
