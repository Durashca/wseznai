<?php
function new_to_PC ($num) {
include 'config.php';
session_start();

// Создание соединения с базой данных
$conn = new mysqli($host, $user, $pass, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: ". $conn->connect_error);
}

 $user_id = $_SESSION['user_id'];

 $_SESSION['user_progress'] = $num;

 // Подготовленный запрос для безопасной выборки данных
 $stmt = $conn->prepare("INSERT INTO progress (id, new_to_PC) VALUES ( ?, ?)");
 $stmt->bind_param("ii",  $user_id, $num);
 $stmt->execute();
 



}
?>