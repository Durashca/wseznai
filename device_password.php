<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Пароль</title>
    <style>
        .strikethrough {
            text-decoration: line-through;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">Пароль на ПК или ноутбуке</h1>
                    <p>Пароль - предназначен для того, чтобы никто кроме вас не имел доступа к данному устройству. Если
                        вы любите ходить вместе с ноутбуком, то не помешало его бы запаролить, да и ПК было бы неплохо
                        паролить.</p>
                    <div class="bd-callout bd-callout-info">Напомню, не надо бояться того что вы можете забыть пароль.
                        Ведь еще с урока про <b>Логин</b>, я, объяснил, что системе надо подтвердить вашу личность и
                        как-только устройство удостоверится в личности, то вы потом сможете поменять пароль.
                    </div>
                    <div class="keyboard-shortcut-block">
                        <h4></h4>
                        <ol>
                            <li>Нажмите кнопку: <b>Пуск</b> (она рабочем столе, в нижнем левом углу).</li>
                            <img src="src/images/device_password/img_1.png">
                            <li>Выберите: <b>Параметры</b>.</li>
                            <img src="src/images/device_password/img.png">
                            <li>В поисковой строке напишите: <b>Варианты входа</b></li>
                            <img src="src/images/device_password/img_2.png">
                            <li>Выберите <b>Пароль</b> и выберите, один из способов, который вам нужно будет вводить при
                                входе.
                            </li>
                            <img src="src/images/device_password/img_3.png">

                        </ol>
                    </div>
                    <div class="keyboard-shortcut-block dashed">
                        <h4>Выберите один способ входа, которого не существует</h4>
                            <!--правильный-->
                            <div class="form-check">
                                <label class="form-check-label" id="correct5" >
                                    С помощью <b>ПИН-кода</b>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" id="correct4" >
                                    С помощью <b>графического пароля</b>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" id="correct3" >
                                    С помощью <b>распознания отпечатка пальца</b>
                                </label>
                            </div>
                            <!--правильный-->
                            <div class="form-check">
                                <label class="form-check-label" id="correct2" >
                                    С помощью <b>ключа безопасности</b>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" id="correct1" >
                                    С помощью <b>танцевального жеста</b>
                                </label>
                            </div>
                        </div>
                </content>
            </div>
        </div>
    </div>
    <div id="transition_warning"  style="display: flex; justify-content: center; margin: 1% 0;">
        <button id="createPageButton" type="button" class="btn btn-outline-success">
            <a class="nav-link active" href="the_ending.php">Сл. страница</a>
        </button>
    </div>
</div>

<div id="advertisement"></div>
<?php
include 'src/php/additionally.php';

include 'progress.php';
new_to_PC(100);

?>
<script>

    document.addEventListener('DOMContentLoaded', function () {
        let labels = document.querySelectorAll('.form-check-label');
        let correct1 = document.getElementById('correct1');
        let correct2 = document.getElementById('correct2');
        let correct3 = document.getElementById('correct3');
        let correct4 = document.getElementById('correct4');
        let correct5 = document.getElementById('correct5');

        function labelClickHandler() {
            this.classList.toggle('strikethrough');

            if (correct1.classList.contains('strikethrough') && !correct2.classList.contains('strikethrough') &&
                !correct3.classList.contains('strikethrough') && !correct4.classList.contains('strikethrough') &&
                !correct5.classList.contains('strikethrough')) {

                func_tg_dis();
                func_tg_vcr();
                localStorage.setItem("user_progress", "100");



                labels.forEach(function(label) {
                    label.removeEventListener('click', labelClickHandler);
                });
            } else {
                func_tg_wrong();
            }
        }

        labels.forEach(function (label) {
            label.addEventListener('click', labelClickHandler);
        });



    if(localStorage.getItem("user_progress") === "100"){
        labels[4].classList.toggle('strikethrough');
        labels.forEach(function(label) {
         label.removeEventListener('click', labelClickHandler);
        });
        func_tg_dis();
        func_tg_vcr();
    }

    });
</script>
</body>
</html>