<!-- index.php -->
<?php
include 'config.php';

$link = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");

session_start(); // Начало сессии

if ($_SERVER["REQUEST_METHOD"] == "POST") { // нажатие на кнопку
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Проверка логина и пароля в базе данных для авторизации
        $query = "SELECT id, name, pass FROM users WHERE login=?";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "s", $login);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            // Авторизация успешна
            mysqli_stmt_bind_result($stmt, $userId, $username, $hashed_password);
            mysqli_stmt_fetch($stmt);

            if (password_verify($password, $hashed_password)) {
                // пароль совпадает, авторизация успешна
                $_SESSION['user_id'] = $userId;
                $_SESSION['username'] = $username;
                $_SESSION['user_login'] = $login;

                header("Location: index.php");
                exit; // Важно завершить выполнение скрипта после перенаправления
            } else {
                // пароль не совпадает, авторизация неуспешна
            }
        } else {
            // логин не найден
        }
    } elseif (isset($_POST['reg_name']) && isset($_POST['reg_login']) && isset($_POST['reg_password'])) {
        $regName = $_POST['reg_name'];
        $regLogin = $_POST['reg_login'];
        $regPassword = $_POST['reg_password'];

        // Хэширование пароля
        $hashed_password = password_hash($regPassword, PASSWORD_DEFAULT);

        // Проверка уникальности логина
        $check_query = "SELECT id FROM users WHERE login=?";
        $check_stmt = mysqli_prepare($link, $check_query);
        mysqli_stmt_bind_param($check_stmt, "s", $regLogin);
        mysqli_stmt_execute($check_stmt);
        mysqli_stmt_store_result($check_stmt);

        if (mysqli_stmt_num_rows($check_stmt) > 0) {
            echo "Логин уже существует. Выберите другой логин.";
        } else {
            // Регистрация нового пользователя
            $register_query = "INSERT INTO users (name, login, pass) VALUES (?,?,?)";
            $register_stmt = mysqli_prepare($link, $register_query);
            mysqli_stmt_bind_param($register_stmt, "sss", $regName, $regLogin, $hashed_password);
            $result = mysqli_stmt_execute($register_stmt);

            if ($result) {
                $newUserId = mysqli_insert_id($link);
                // Установка переменных сессии
                $_SESSION['user_id'] = $newUserId;
                $_SESSION['username'] = $regName;
                $_SESSION['user_login'] = $regLogin;

                header("Location: index.php");
                exit; // Важно завершить выполнение скрипта после перенаправления
            } else {
                // ошибка при регистрации
            }
        }
    }
}
?>