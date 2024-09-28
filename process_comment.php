<?php

// Получаем имя файла из URL
$path = $_SERVER['PHP_SELF'];
$fileName = basename($path, '.php');

// Устанавливаем значение в переменную
$id_comment = $fileName;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['comment_text'])) {
        session_start();
        $comment = $_POST['comment_text'];
        $id_user = $_SESSION['user_id'];
        $name_user = $_SESSION['user_name'];
        $id_comment_post = $_POST['id_comment'];

        process_comment_addInTable($id_comment_post, $comment, $id_user, $name_user);

        $referer = $_SERVER['HTTP_REFERER'];
        if ($referer) {
            header("Location: $referer");
            exit;
        }
    }
}

function process_comment_takingInTable($id_comment) {
    include 'config.php';

    // Создание соединения с базой данных
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: ". $conn->connect_error);
    }

    // Валидация входных данных
    if (empty($id_comment)) {
        die("Ошибка: не заполнено поле id_comment.");
    }

    // Подготовленный запрос для безопасной выборки данных
    $stmt = $conn->prepare("SELECT * FROM users_comment WHERE id_comment =?");
    $stmt->bind_param("s", $id_comment);
    $stmt->execute();
    $result = $stmt->get_result();

    // Вывод комментариев
    $output = "";
    if ($result->num_rows > 0) {
        // Переворачиваем массив результатов
        $rows = array_reverse($result->fetch_all(MYSQLI_ASSOC));

        foreach ($rows as $row) {
            // Здесь проверяем каждую строку на соответствие id_comment
            if ($id_comment == $row['id_comment']) {
                $output .= "<div id='" . $id_comment . "' class='commentsContainer'>";

                $output .= "<div style='margin-left: 0;' class='container'>";

                $output .= "<div class='comment'>";
                $output .= "<div class='comment-header'>";

                $output .= "<h4 class='comment-author'>" . (($row['name_user'] == null || $row['name_user'] == '') ? 'Пользователь' : $row['name_user']) . "</h4>";
                $output .= "<span class='comment-date'>" . date("d m Y", strtotime($row['data_comment'])) . "</span>";
                $output .= "</div>"; // Закрытие.comment-header
                $output .= "<div class='comment-body'>";
                $comment_with_a_capital_letter = $row['comment'];
                $comment_with_a_capital_letter = ucfirst($comment_with_a_capital_letter);
                $output .= "<p class='comment-text'>" . $comment_with_a_capital_letter . "</p>";
                $output .= "</div>"; // Закрытие.comment-body
                $output .= "</div>"; // Закрытие.comment
                $output .= "</div>"; // Закрытие.container
                if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['id_user']) {
                    $output .= "<form id='commentDelete' action='delete_comment.php' method='post' >";
                    $output .= "<input type='hidden' name='id_request' value='" . $row['id_request'] . "'>";
                    $output .= "<input type='submit' style=' border-radius: 0 0 0 5px;'   class='btn btn-outline-success delete-button' name='delete' value='Удалить коммент'>";
                    $output .= "</form>";
                }
                $output .= "</div>"; // Закрытие.commentsContainer
            }
        }
    } else {
        $output = "Пока нет комментариев. Станьте первым кто выложит комментарий.";
    }

    // Закрытие запроса и соединения
    $stmt->close();
    $conn->close();

    return $output;
}

// добавка коммента с сайта
function process_comment_addInTable($id_comment, $comment, $id_user, $name_user) {
    include 'config.php';

    // Создание соединения с базой данных
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: ". $conn->connect_error);
    }

    // Валидация входных данных
    if (empty($id_comment) || empty($comment) || empty($id_user) || empty($name_user)) {
        die("Ошибка: не заполнены все поля.");
    }

    // Подготовленный запрос для безопасной вставки данных
    $stmt = $conn->prepare("INSERT INTO users_comment (id_comment, id_user, name_user, comment) VALUES (?,?,?,?)");
    $stmt->bind_param("siss", $id_comment, $id_user, $name_user, $comment);

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

<div style="text-align: start;">
    <h4 style="margin-left: 10px;">Комментарии</h4>
    <form action="process_comment.php" id="commentForm" method="post"  >
        <textarea name="comment_text" rows="4" cols="25" placeholder="Поделитесь впечатлениями"></textarea>
        <input type="hidden" id="id_comment" name="id_comment" value="<?php echo $id_comment;?>">
        <br>

            <input id="sending_comment_button" class="btn btn-outline-success" type="submit" value="Добавить комментарий">

    </form>

<!--  спуск вниз-->

    <!-- отправляем в value input['id_comment'] имя подключаемого файла  -->

    <div id="comments_users">
        <?php
        if (isset($id_comment)) {
            echo process_comment_takingInTable($id_comment);
        }else{
            echo '<p>нет коментариев</p>';
        }
      ?>
    </div>
</div>