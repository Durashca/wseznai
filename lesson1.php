<?php
include 'basic.php';
?>
<!-- lesson1.php -->
<!DOCTYPE html>
<html>
<head>
  <title>lesson1</title>
</head>
<body class="container-fluid">
  
<!-- menu -->
<?php
include 'src/php/addMenu.php';
?>
<!-- menu -->
       <!-- content -->
    <div>
    <div class="container text-center">
    <div class="row">

        <div id="htmlContent">
        <?php
        include 'src/lesson/lesson1.html';
        ?>
        </div>   
         <!-- content -->
        <!-- Форма для комментариев -->
         <!--lesson1.php -->
        <div style="text-align: start;">
            <h4>Комментарии</h4>
            <form id="commentForm" method="post">
                <textarea name="commentText" rows="4" cols="25" placeholder="Текст"></textarea>
                <input type="hidden" id="id_comment" name="id_comment" value="lesson1">
                <br>
                <input type="submit" value="Добавить комментарий">
            </form>
        </div>         

        <!-- Конец формы для комментариев -->

        <!-- коментарии пользователей -->
         
        <?php
        include 'src/php/process_comment_takingInTable.php';      
        $id_comment = 'lesson1';
        echo process_comment_takingInTable($id_comment);
        
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
<script src="src/js//meta.js"></script>
<script src=src/js/addlinkLesson.js></script>
</body>
</html>