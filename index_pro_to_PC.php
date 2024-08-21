<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шаблон для програмистов</title>

</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">

                <!---->
                <content>
                <h1 class="title text-center">Работа с php</h1>
                <a href="stage_one.php">#1</a>
                <a href="stage_two.php">#2</a>
                <a href="stage_three.php">#3</a>
                </content>
            </div>
        </div>
    </div>
</div>

<?php

include 'src/php/additionally.php';
?>
?>
</body>
</html>