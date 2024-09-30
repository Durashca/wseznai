<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Конец</title>
    <link rel="stylesheet" href="src/css/window_the_ending.css">
    <script src="src/js/window_the_ending.js"></script>
<style>
    /* Styles for certificate image */
    #canvas {
        width: 100%;
        height: auto;
        display: block;
        margin: 0 auto 20px;
    }

    /* Styles for download button */
    #downloadCertificateButton {
        width: 60%;
        margin: 0 auto;
    }

    /* Styles for additional content */
    .additional-content {
        text-align: center;
    }
</style>
</head>
<body>
<!--  -->
<div class='Modal' id='Modal'>
    <div class='modalContent'>
        <h2>Введите имя и фамилию</h2>
        <form id='form' onsubmit="saveUserData(event)">
            <input type='text' id='name' placeholder='Имя' required>
            <input type='text' id='surname' placeholder='Фамилия' required>
            <button type="submit" class="btn btn-outline-success" id='continue'>Продолжить</button>
        </form>
    </div>
</div>
<!--  -->

<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div style="margin-bottom: 10%;" class="container-material">
                <content style="text-align: center; margin: 0 auto">
                    <h4 class="font-congratulations" style="text-align: center; margin-bottom: 3%">Мои поздравления, вы прошли этот сложный путь.</h4>
                    <canvas id="canvas"></canvas>
                    <form action="download_help.php" id="commentForm" method="post" onsubmit="downloadCertificate(event)">
                        <input style="width: 100%; min-width: 120px" class="btn btn-outline-success" type="submit" name="downloadCertificateButton" id="downloadCertificateButton" value="Скачать">
                    </form>
                </content>
            </div>
        </div>
    </div>
</div>
<?php
include 'src/php/additionally.php';
?>

<script src="src/js/sertificate.js">


</script>
</body>
</html>