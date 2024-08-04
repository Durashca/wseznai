<?php
include 'basic.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Theme Switcher</title>
</head>
<body class="container-fluid">
  
<!-- menu -->
<?php
include 'src/php/addMenu.php';
?>
<!-- menu -->

    <!-- content -->
    <div id="htmlContent">
    <div class="container text-center">
    <div class="row">
        <h1>Выберите раздел</h1>
        <div id="content">
        <a href="index_new_to_PC.php">Урок для начинающих</a>
        <a>#2</a>
        <a>#3</a>
        </div>                  
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
