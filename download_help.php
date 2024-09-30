<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (session_status() == PHP_SESSION_NONE) {
        // Сессия не запущена, запускаем ее
        session_start();
    } else {
        // Сессия уже запущена
        echo 'Сессия уже активна.';
    }

    if (isset($_SESSION['user_id']) && isset($_POST['downloadCertificateButton'])) {
        $id_user = $_SESSION['user_id'];

        // Убедиться, что user_id является числом
        if (!is_numeric($id_user)) {
            die("Неверный ID пользователя.");
        }

        include 'config.php';

        // Создание соединения с базой данных
        $conn = new mysqli($host, $user, $pass, $dbname);

        // Проверка соединения
        if ($conn->connect_error) {
            error_log("Ошибка подключения: " . $conn->connect_error);
            die("Ошибка подключения к базе данных.");
        }

        // Подготовленный запрос для безопасного обновления данных
        $stmt = $conn->prepare("UPDATE `progress` SET `download_sertificate` = '1' WHERE `progress`.`id` = ?");
        $stmt->bind_param("i", $id_user);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                // Запрос выполнен и данные обновлены
                header("Location: the_ending.php");
                exit; // Выход из скрипта после редиректа
            } else {
                // Запрос выполнен, но ничего не было обновлено
                echo "Запись не найдена или уже обновлена.";
            }
        } else {
            // Ошибка выполнения запроса
            error_log("Ошибка: " . $stmt->error);
            echo "Ошибка выполнения запроса.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Необходимые параметры не заданы.";
    }
}