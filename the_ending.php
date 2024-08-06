<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Конец</title>

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
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div style="margin-bottom: 10%;" class="container-material">
                <content style="text-align: center; margin: 0 auto">
                    <h4 class="font-congratulations" style="text-align: center; margin-bottom: 3%">Мои поздравления, вы
                        прошли этот сложный путь.</h4>
                    <canvas id="canvas"></canvas>
                    <div style="display: flex; width: 100%; justify-content: center;">
                        <button id="downloadCertificateButton" class="btn btn-outline-success"
                                onclick="downloadCertificate()">Скачать
                        </button>
                    </div>
                </content>
            </div>
        </div>
    </div>
</div>
<?php
include 'src/php/additionally.php';
?>
<script>
    // Увеличение первых букв имени и фамилии
    const modifiedUserName = localStorage.getItem('userName').charAt(0).toUpperCase() + localStorage.getItem('userName').slice(1);
    const modifiedUserSurname = localStorage.getItem('userSurname').charAt(0).toUpperCase() +localStorage.getItem('userSurname').slice(1);

    const currentDate = new Date();
    const day = String(currentDate.getDate()).padStart(2, '0');
    const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Добавляем нуль перед месяцем, если он однозначный
    const year = currentDate.getFullYear();
    const currentDateString = `${day}.${month}.${year}`;

    window.addEventListener('DOMContentLoaded', function () {
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');

        const img = new Image();
        img.onload = function () {
            canvas.width = img.width;
            canvas.height = img.height;

            ctx.drawImage(img, 0, 0);

            ctx.font = 'italic 25px Roboto, sans-serif';
            ctx.fillText(currentDateString, 220, 505); // Рисуем текущую дату на холсте в указанной позиции

            ctx.font = 'italic bold 30px Roboto, sans-serif';
            ctx.fillStyle = '#000';

            const userText = ` ${modifiedUserSurname} ${modifiedUserName} `;
            const userTextWidth = ctx.measureText(userText).width;
            const userTextX = (canvas.width - userTextWidth) / 2; // Центрирование текста на горизонтальной оси
            const userTextY = 285; // Позиция текста по вертикали

            ctx.fillText(userText, userTextX, userTextY);

            ctx.font = 'italic 25px Roboto, sans-serif';


    /*        document.getElementById('certificateContainer').style.display = 'block';*/
        };

        img.src = 'src/images/garbage/scr.png'; // Путь к фоновому изображению
    });

    function downloadCertificate() {
        const canvas = document.getElementById('canvas');
        const a = document.createElement('a');
        a.href = canvas.toDataURL('image/png');
        a.download = 'certificate.png';
        a.click();
    }

    let lesson_arr = document.querySelectorAll('a.btn.btn-primary.lesson');
    window.onload = function () {
        for (let i = 1; i < lesson_arr.length; i++) {
            lesson_arr[i].classList.remove('disabled')
            lesson_arr[i].disabled = false;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
            let userProgress = Array(10).fill(true); // Устанавливаем все уроки как завершенные
            localStorage.setItem('userProgress', JSON.stringify(userProgress));
            showUserProfile(); // Обновляем данные на странице
    });

    // устанавливаем прогресс бар
    document.getElementById('progress_bar').style.width = `100%`;

</script>
</body>
</html>