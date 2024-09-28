<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (isset($_SESSION['user_id']) && isset($_POST['downloadCertificateButton'])) {
        $id_user = $_SESSION['user_id'];

        include 'config.php';

        // Создание соединения с базой данных
        $conn = new mysqli($host, $user, $pass, $dbname);

        // Проверка соединения
        if ($conn->connect_error) {
            die("Ошибка подключения: ". $conn->connect_error);
        }

        // Подготовленный запрос для безопасного обновления данных
        $stmt = $conn->prepare("UPDATE `progress` SET `download_sertificate` = true WHERE id = ?");
        $stmt->bind_param("i", $id_user);

        if ($stmt->execute()) {
            // Запрос выполнен успешно
            header("Location: the_ending.php");
        } else {
            // Ошибка выполнения запроса
            echo "Ошибка: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>
