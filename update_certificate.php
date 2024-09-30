<?php
$id_user = $_POST['id_user'];

if (!isset($id_user) || !is_numeric($id_user)) {
    http_response_code(400);
    echo "Ошибка: неверный идентификатор пользователя.";
    exit;
}

include 'config.php';

// Create a connection to the database
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection error: " . $conn->connect_error, 3, 'error.log');
    http_response_code(500);
    echo "Ошибка: не удалось подключиться к базе данных.";
    exit;
}

// Prepare a query to update the progress table
$stmt = $conn->prepare("UPDATE `progress` SET `download_sertificate` = '1' WHERE `progress`.`id` = ?");
$stmt->bind_param("i", $id_user);

if (!$stmt) {
    http_response_code(500);
    echo "Ошибка: не удалось подготовить запрос.";
    exit;
}

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        // Query executed and data updated
        http_response_code(200);
        echo "Запись обновлена успешно.";
    } else {
        // Query executed, but nothing was updated
        http_response_code(200);
        echo "Запись не обновлена.";
    }
} else {
    http_response_code(500);
    echo "Ошибка: не удалось выполнить запрос.";
}
?>