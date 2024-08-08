<?php
function new_to_PC($num) {
    include 'config.php';
    session_start();

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    $user_id = $_SESSION['user_id'];

    // Получаем текущий прогресс пользователя
    $stmt = $conn->prepare("SELECT new_to_PC FROM progress WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($current_progress);
    $stmt->fetch();
    $stmt->close();

    // Проверяем, не является ли новое значение прогресса меньшим, чем текущее или прогресс еще не задан
    if ($current_progress === null || $num > $current_progress) {
        $_SESSION['user_progress'] = $num;

        // Обновляем или вставляем новое значение прогресса
        $stmt = $conn->prepare("INSERT INTO progress (id, new_to_PC) VALUES (?, ?) ON DUPLICATE KEY UPDATE new_to_PC = ?");
        $stmt->bind_param("iii", $user_id, $num, $num);
        $stmt->execute();
        $stmt->close();
    }

    $conn->close();
}
?>
