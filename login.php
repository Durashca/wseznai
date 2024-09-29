<?php
include 'config.php';

// Подключение к базе данных
$link = mysqli_connect($host, $user, $pass, $dbname);

if (!$link) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обработка формы входа
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $pass = $_POST['password'];

        // Используем подготовленные запросы для безопасности
        $query = "SELECT id, name, login, pass FROM users WHERE login = ?";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "s", $login);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);

        // Проверяем количество строк в результирующем наборе
        if (mysqli_num_rows($res) == 1) {
            // Если пользователь найден, проверяем пароль
            $row = mysqli_fetch_assoc($res);
            if (password_verify($pass, $row['pass'])) { // Используем password_verify для проверки пароля
                session_start(); // Начинаем новую сессию
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_mail'] = $row['login'];

                // Берем прогресс
                $query = "SELECT new_to_PC FROM progress WHERE id = ?";
                $stmt = mysqli_prepare($link, $query);
                mysqli_stmt_bind_param($stmt, "i", $row['id']); // Передаем id пользователя
                mysqli_stmt_execute($stmt);
                $res = mysqli_stmt_get_result($stmt);
                if ($row_progress = mysqli_fetch_assoc($res)) {
                    $_SESSION['user_progress'] = $row_progress["new_to_PC"];
                }

                header("Location: the_memo.php");
                exit; // Завершаем выполнение скрипта после перенаправления
            } else {
                echo "Неверный пароль.";
                echo "<a href='index.php'> вернуться обратно</a>";
            }
        } else {
            echo "Пользователь не найден.";
            echo "<a href='index.php'> вернуться обратно</a>";
        }
    }
}