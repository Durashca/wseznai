<!-- добавка кмента с сайта -->
<?php
session_start(); // Добавляем эту строку, чтобы использовать сессии

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['commentText'])) {
        $comment = $_POST['commentText'];
        $id_user = $_SESSION['user_id']; // Замените это на реальный идентификатор пользователя
        $name_user = $_SESSION['user_name']; // Замените это на имя текущего пользователя или получите его из сессии
        $id_comment = $_POST['id_comment'];

        // Вместо вывода на экран, вызываем функцию для добавления комментария в базу данных
        process_comment_addInTable($id_comment, $comment, $id_user, $name_user);
        
        // После добавления комментария перенаправляем пользователя на исходную страницу или другую страницу
        
        $referer = $_SERVER['HTTP_REFERER']; // Получаем URL предыдущей страницы
        header("Location: $referer");
        exit; // Важно завершить выполнение скрипта после перенаправления
    }
}


// добавка комента с сайта
function process_comment_addInTable($id_comment, $comment, $id_user, $name_user) {
    
    include 'config.php';
    
    // Создание соединения с базой данных
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовленный запрос для безопасной вставки данных
    $stmt = $conn->prepare("INSERT INTO users_comment (id_comment, id_user, name_user, comment) VALUES ('$id_comment', '$id_user', '$name_user', '$comment')");

    // Выполнение запроса
    if ($stmt->execute()) {
        $referer = $_SERVER['HTTP_REFERER']; // Получаем URL предыдущей страницы
        header("Location: $referer");
        exit; // Важно завершить выполнение скрипта после перенаправления
      } else {
        $referer = $_SERVER['HTTP_REFERER']; // Получаем URL предыдущей страницы
        header("Location: $referer");
        exit; // Важно завершить выполнение скрипта после перенаправления
          
      }

    // Закрытие запроса и соединения
    $stmt->close();
    $conn->close();
}
?>
<!-- добавка кмента с сайта -->
