<?php
include 'error.php';
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
        
        </div>   
         <!-- content -->
        <!-- Форма для комментариев -->
         
        
        <!-- коментарии пользователей -->

    </div>
    </div>
    </div>
    <!-- content -->
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

      
        <!-- offcanvas -->
        
        <!-- offcanvas -->
<script src="src/js/meta.js"></script>
<script src=src/js/addlinkLesson.js></script>
 <!-- Login form -->
        <div id="divLogin">
        <?php
        session_start();
        ?>
         <form action="login.php" method="POST">
            <input name="login" type="text" placeholder="Login" required autocomplete="off">
            <input name="password" type="password" placeholder="Password" required autocomplete="off">
            <input type="submit" value="Login" required autocomplete="off">
         </form>
          </div>
        <br>
        <!-- Registration form -->
        <div id="divRegistration">
        <?php
        session_start();
        ?>
        <form action="registration.php" method="POST">
            <input name="reg_name" type="text" placeholder="Name" required autocomplete="off">
            <input name="reg_login" type="text" placeholder="Login" required autocomplete="off">
            <input name="reg_password" type="password" placeholder="Password" required autocomplete="off">
            <input type="submit" value="Register">
        </form>
        </div>
        <!-- Profile -->
        <div class="form-profile row g-3 hide" id="divProfile">
          <div class="col-md-8">
            <p>ID: </p>
            <?php
        session_start();
        ?>
            <p id="id">
              <?php if (isset($_SESSION['user_id'])) echo $_SESSION['user_id']; ?>
            </p>
          </div>
          <div class="col-md-8">
            <p>Name: </p>
            <p id="name">
              <?php if (isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?>
            </p>
          </div>
          <div class="col-md-8">
            <p>Login: </p>
            <p id="login">
              <?php if (isset($_SESSION['user_mail'])) echo $_SESSION['user_mail']; ?>
            </p>
          </div>
        </div>
</body>
</html>