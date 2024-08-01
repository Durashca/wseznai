<?php
include 'basic.php';
?>
<!-- the_memo.php -->
<!DOCTYPE html>
<html>
<head>
  <title>the_memo</title>
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
        include 'src/new_to_PC/the_memo.html'; 
        ?>
        </div>   
         <!-- content -->
          
        <!-- Форма для комментариев -->
         
        <div style="text-align: start;">
            <h4>Комментарии</h4>
            <form id="commentForm" method="post">
                <textarea name="commentText" rows="4" cols="25" placeholder="Текст"></textarea>
                <input type="hidden" id="id_comment" name="id_comment" value="the_memo"> 
                <br>
                <input type="submit" value="Добавить комментарий">
            </form>
        </div>         

        <!-- Конец формы для комментариев -->

        <!-- коментарии пользователей -->
         
        <?php
        include 'src/php/process_comment_takingInTable.php';      
        $id_comment = 'the_memo'; 
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