<!-- В delete_comment.php -->
<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$dbname = 'db_users';

// Проверка аутентификации или другие проверки безопасности

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    

    // Получение данных из POST-запроса
    $Id_request = $_POST['id_request'];

    // Подключение к базе данных
    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

   // Удаление комментария
   $sql = "DELETE FROM users_comment WHERE id_request = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("i", $Id_request);
   $stmt->execute();

// Проверка успешности удаления
if ($stmt->affected_rows > 0) {
    $stmt->close();
    $conn->close();  // Закрыть соединение с базой данных здесь

    $referer = $_SERVER['HTTP_REFERER']; // Получаем URL предыдущей страницы
    header("Location: $referer");
    exit;  // Завершение выполнения скрипта
} else {
    $stmt->close();
    $conn->close();
    http_response_code(500); // Ошибка сервера
}

    // Закрытие соединения с базой данных
    $stmt->close();
    $conn->close();
} else {
    http_response_code(400); // Плохой запрос
}
?>