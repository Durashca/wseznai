<!-- php.php -->
<?php
include 'config.php';

$link = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($link, "SET NAMES 'utf8'");

session_start(); // Начало сессии

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Проверка логина и пароля в базе данных для авторизации
        $query = "SELECT id, name FROM users WHERE login=? AND pass=?";
        $stmt = mysqli_prepare($link, $query);
        mysqli_stmt_bind_param($stmt, "ss", $login, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            // Авторизация успешна
            mysqli_stmt_bind_result($stmt, $userId, $username);
            mysqli_stmt_fetch($stmt);

            // Установка переменных сессии
            $_SESSION['user_id'] = $userId;
            $_SESSION['username'] = $username;

          //  echo "Авторизация успешна. ID: " . $userId;
            header("Location: php.php"); // Переход на другую страницу
            exit(); // завершаем скрипт
        } else {
         //   echo "Неправильный логин или пароль";
        }
    } elseif (isset($_POST['reg_name']) && isset($_POST['reg_login']) && isset($_POST['reg_password'])) {
        $regName = $_POST['reg_name'];
        $regLogin = $_POST['reg_login'];
        $regPassword = $_POST['reg_password'];

        // Проверка уникальности логина
        $check_query = "SELECT id FROM users WHERE login=?";
        $check_stmt = mysqli_prepare($link, $check_query);
        mysqli_stmt_bind_param($check_stmt, "s", $regLogin);
        mysqli_stmt_execute($check_stmt);
        mysqli_stmt_store_result($check_stmt);

        if (mysqli_stmt_num_rows($check_stmt) > 0) {
        //    echo "Логин уже существует. Выберите другой логин.";
        } else {
            // Регистрация нового пользователя
            $register_query = "INSERT INTO users (name, login, pass) VALUES (?,?,?)";
            $register_stmt = mysqli_prepare($link, $register_query);
            mysqli_stmt_bind_param($register_stmt, "sss", $regName, $regLogin, $regPassword);
            $result = mysqli_stmt_execute($register_stmt);

            if ($result) {
                $newUserId = mysqli_insert_id($link);
            //    echo "Пользователь успешно зарегистрирован. ID: " . $newUserId;

                // Установка переменных сессии
                $_SESSION['user_id'] = $newUserId;
                $_SESSION['username'] = $regName;

                header("Location: php.php"); // Переход на другую страницу
                exit(); // завершаем скрипт
            } else {
              //  echo "Ошибка при регистрации пользователя: " . mysqli_error($link);
            }
        }
    }
}
?>


<!-- добавление комента -->
<?php
// index.php

// Добавляем подключение файла с функцией
include 'src/php/process_comment_addInTable.php';

// Обработка POST-запроса для добавления комментария
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['commentText'])) {
        $comment = $_POST['commentText'];
        $id_user = $_SESSION['user_id']; // Замените это на реальный идентификатор пользователя
        $name_user = $_SESSION['username']; // Замените это на имя текущего пользователя или получите его из сессии

        $id_comment = $_POST['id_comment'];


        // Вызов функции для добавления комментария в базу данных
        $result = process_comment_addInTable($id_comment, $comment, $id_user, $name_user);

        if ($result === true) {
            // Успешно добавлено
            echo "Комментарий успешно добавлен!";
            header("Location: php.php"); // Переход на другую страницу
            exit(); // завершаем скрипт

        } else {
            // Ошибка при добавлении комментария
            echo "Произошла ошибка: " . $result;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Theme Switcher</title>
  <link rel="icon" type="image/png" href="src/ico/icon (1).png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
  <link rel="stylesheet" href="src/css/css.css">
  
</head>
<body class=".container-fluid">
  
<!-- menu -->
<?php
include 'src/php/addMenu.php';
?>
<!-- menu -->

    <!-- content -->
    <div>
    <div class="container text-center">
    <div class="row">
        <h1>Регистрация</h1>
        <video width="100%" controls>
            <source src="movie.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
                      
        <!-- Форма для комментариев -->
        <div style="text-align: start;" class="row">
            <h4>Комментарии</h4>
            <form id="commentForm" method="post">
                <textarea name="commentText" rows="4" cols="25" placeholder="Введите комментарий..."></textarea>
                <input type="hidden" name="id_comment" value="8sfs96234dvxv424ns">
                <br>
                <input type="submit" value="Добавить комментарий">
            </form>
        </div>                         <!-- добавление комментария -->
        <!-- Конец формы для комментариев -->
        <div>

        </div>
        <!-- content -->
         <div class="htmlContent">

         </div>
         <!-- content -->

        <!-- коментарии пользователей -->
        <?php
        include 'src/php/process_comment_takingInTable.php';      
        echo process_comment_takingInTable('8sfs96234dvxv424ns');
        ?>
        <!-- коментарии пользователей -->

    </div>
    </div>
    </div>
<!-- content -->

<!-- offcanvas -->
<?php
  include 'src/php/addOffcanvas.php';
?>
<!-- offcanvas -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src=src/js/addlinkLesson.js></script>
</body>
</html>
