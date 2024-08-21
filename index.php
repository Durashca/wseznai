<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Theme Switcher</title>

</head>
<body class="container-fluid">
  


 <!--  -->
<div id="loader" class="loader">
  <div class="spinner"></div>
</div>
<!-- ы -->


    <!-- content -->
    <div id="htmlContent">
    <div class="container text-center">
    <div class="row">
        <h1 style="text-align: center;">Выберите раздел</h1>
        <div id="content">
        <a href="index_new_to_PC.php">Урок для начинающих</a>
        <br>
        <a href="index_pro_to_PC.php">Шаблон для програмистов</a>
        
        </div>                  
    </div>
    </div>
    </div>
<!-- content -->

<!-- offcanvas -->
<?php
  include 'src/php/additionally.php';
?>
<!-- offcanvas -->
<script src="src/js/meta.js"></script>
<script src=src/js/addlinkLesson.js></script>
</body>
</html>
