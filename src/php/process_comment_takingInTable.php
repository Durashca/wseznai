<?php
function process_comment_takingInTable($id_comment) { 
    include 'config.php';


    // Подключение к базе данных
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Проверка подключения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }    

    // Запрос на получение комментариев для данного id_koment
    $sql = "SELECT * FROM users_comment WHERE id_comment = ?";

    if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $id_comment);
    $stmt->execute();
    }
    // Вывод комментариев
    $result = $stmt->get_result();

    // Вывод комментариев
    if ($result->num_rows > 0) {
        $output = "<div id='" . $id_comment . "' class='commentsContainer'>";
        while ($row = $result->fetch_assoc()) {
            $output .= "<div class='container'>";
            $output .= "<div class='comment'>";
            $output .= "<div class='comment-header'>";
            if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['id_user']) {
                $output .= "<form id='commentDelete' action='src/php/delete_comment.php' method='post'>";
                $output .= "<input type='hidden' name='id_request' value='" . $row['id_request'] . "'>";  // Исправлено здесь
                $output .= "<input type='submit' class='delete-button' name='delete' value='Delete'>";  // Исправлено здесь
                $output .= "</form>";
            }
            $output .= "<h4 class='comment-author'>" .  (($row['name_user'] == null || $row['name_user'] == '') ? 'Пользователь' : $row['name_user'])  . "</h4>";
            $output .= "<span class='comment-date'>" . $row['data_comment'] . "</span>";
            $output .= "</div>"; // Закрытие .comment-header
            $output .= "<div class='comment-body'>";
            $output .= "<p class='comment-text'>" . $row['comment'] . "</p>";
            $output .= "</div>"; // Закрытие .comment-body
            $output .= "</div>"; // Закрытие .comment
            $output .= "</div>"; // Закрытие .container
        }
        $output .= "</div>"; // Закрытие .commentsContainer
    
    } else {
        $output = "Нет комментариев для данного id_koment.";
    }

    // Закрытие соединения с базой данных
    $conn->close();

    return $output;
}
?>
