<?php
session_start();
include 'config.php';

// Подключение к базе данных
$link = mysqli_connect($host, $user, $pass, $dbname);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка формы входа
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $pass = $_POST['password'];

        // Используем подготовленные запросы для безопасности
        $query = "SELECT id, name, login, pass FROM users WHERE login =? AND pass =?";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "ss", $login, $pass);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);

        // Проверяем количество строк в результирующем наборе
        if (mysqli_num_rows($res) == 1) {
            // Если пользователь найден, сохраняем данные в сессии
            $row = mysqli_fetch_assoc($res);
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_mail'] = $row['login'];

            
           
            header("Location: the_memo.php");
            exit; // Важно завершить выполнение скрипта после перенаправления
        } else {
             echo "Пользователь не найден.";
             echo "<a href='index.php'> вернуться обратно</a>";
        }
    }
}
