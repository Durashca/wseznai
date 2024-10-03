<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Глобальные горячие клавиши</title>
</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="text-center">Глобальные горячие клавиши</h1>
                    <div>
                        <p>Что такое горячие клавиши? Если кратко, то это когда вы зажимаете на ПК две и более кнопки
                            одновременно. Они обычно предназначены для облегчения и ускорения работы. Теперь разберем
                            подробнее.</p>
                        <p>Если вы хотите стать профи в использовании ПК, то горячие клавиши надо знать как таблицу
                            умножения. Английская клавиатура или русская, это никак не повлияет на горячие клавиши.</p>
                        <!--<p>Знаете ли вы, что использование горячих клавиш может сэкономить вам кучу времени и усилий? Они действительно являются супергероями вашей продуктивности! Просто представьте: вы можете моментально копировать и вставлять текст без лишних кликов мышью. А что насчет отмены удаленного текста???</p>-->
                        <!--ctrl + c-->
                        <div id="ctrl-c" class="keyboard-shortcut-block"><h4>Научимся скопировать текст с помощью
                                комбинации Ctrl + C:</h4>
                            <ol>
                                <li>Откройте блокнот (на рабочем столе нажмите правой кнопкой мыши -> создать ->
                                    текстовый документ).
                                </li>
                                <li>Выделите текст (наведите на начало текста -> удерживая левую кнопку введите вправо
                                    до конца слова или предложения).
                                </li>
                                <li style="list-style-type: none"><b>Пример:</b> "<i id="example">Этот текст вы должны
                                        выделить с помощью мышки</i>"
                                </li>
                                <li>Нажмите и удерживайте кнопку <b>Ctrl</b> (обычно она в нижнем левом углу
                                    клавиатуры).
                                </li>
                                <li>Теперь не отпуская кнопку <b>Ctrl</b> нажмите ТОЛЬКО 1 раз на английскую <b>"C"</b>.
                                </li>
                                <li>Отпустите кнопки.</li>
                            </ol>
                        </div>


                        <!--ctrl + v-->
                        <div id="ctrl-v" class="keyboard-shortcut-block">
                            <h4>Теперь текст сохранен и его можно вставить. Узнаем как это сделать с помощью комбинации
                                Ctrl + V:</h4>
                            <ol>
                                <li>Перейдите в блокнот (текстовый документ).</li>
                                <li>Удерживайте кнопку <b>Ctrl</b> и нажмите ТОЛЬКО 1 раз на английскую <b>"V"</b> (она
                                    находится рядом с английской <b>"C"</b>).
                                </li>
                                <li>Отпустите кнопки.</li>
                            </ol>

                            <div style="margin: 0" class=" bd-callout-green bd-callout">
                                <h6>Вы научились копировать и вставлять текст с помощью комбинаций: <b>Ctrl + C</b>
                                    (копировать), <b>Ctrl + V</b> (вставить), узнаем как вырезать, и самое интересное
                                    отменить.</h6>
                            </div>
                        </div>
                        <!---->

                        <!--ctrl + x-->
                        <div id="ctrl-x" class="keyboard-shortcut-block">
                            <h4>Пробуем вырезать текст из одного поля и вставить его с помощью комбинации Ctrl + X:</h4>
                            <ol>
                                <li>Выделите текст, который вы вставили ранее.</li>
                                <li>Нажмите и удерживайте кнопку <b>Ctrl</b>.</li>
                                <li>Теперь не отпуская кнопку <b>Ctrl</b> нажмите 1 раз на английскую <b>"X"</b> (она
                                    находится рядом с английской "C").
                                </li>
                                <li>Отпустите кнопки.</li>
                            </ol>
                            <!--карточка-->
                            <div style="margin: 0" class=" bd-callout-info bd-callout">
                                <h6>Если зажать <b>Ctrl</b> и нажать 1 раз английскую <b>"V"</b>, то его можно будет <b>вставить</b>.
                                </h6>
                            </div>
                        </div>

                        <!--ctrl + z-->
                        <div id="ctrl-z" class="keyboard-shortcut-block">
                            <h4>Мы подошли к самому интересному. Как вернуть прежние изменения с помощью Ctrl + Z:</h4>
                            <ol>
                                <li>В этом же блокноте.</li>
                                <li>Нажмите и удерживайте кнопку <b>Ctrl</b>.</li>
                                <li>Теперь не отпуская кнопку <b>Ctrl</b> нажмите 1 раз на английскую <b>"Z"</b>.</li>
                                <li>Отпустите кнопки.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="keyboard-shortcut-block dashed">
                        <h4>Скопируйте весь текст примера <b style="text-decoration: underline">без кавычек</b> и
                            вставьте его в поле справа (<b>Ctrl</b> + <b>V</b>):</h4>
                        <p style="margin: 0 auto">Пример:</p>
                        <i style="display: inline">"Выделите весь этот текст, без кавычек"</i> -> <input maxlength="37"
                                                                                                         id="ctrlV">
                    </div>


                    <div id="pre_emptive_letter" class="bd-callout bd-callout-orange"></div>

                    <!---->
            </div>
        </div>
    </div>
</div>
<div id="transition_warning" style="display: flex; justify-content: center; margin: 1% 0;">
    <button   id="createPageButton" type="button"
            class="btn btn-outline-success createPageButton">
        <a class="nav-link active " href="basic_keys.php">Сл. страница</a>
    </button>
</div>

<div id="advertisement"></div>


<?php
include 'src/php/additionally.php';
if ($_SESSION['user_progress'] < 20) {
    include 'progress.php';
    new_to_PC(20);
}
?>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        // Определить ширину экрана
        const screenWidth = window.innerWidth;
        // Определить тип устройства на основе ширины
        if (screenWidth < 768) {
            /*телефон*/
            func_tg_dis();
            full_execution();

        } else {

            let inpCtrlV = document.querySelector('#ctrlV');
            let nextButton = document.querySelector('.createPageButton');

            nextButton.disabled = true; // блокируем кнопку


            let correctAttempt = false;

            inpCtrlV.addEventListener('keydown', function (e) {
                if (e.ctrlKey && (e.key === 'v' || e.key === 'м')) {
                    setTimeout(() => {
                        if (inpCtrlV.value === 'Выделите весь этот текст, без кавычек') {
                            inpCtrlV.classList.add('disabled');
                            inpCtrlV.readOnly = true;
                            func_tg_vcr();
                            nextButton.disabled = false;
                            nextButton.classList.remove('disabled')

                            correctAttempt = true;
                        } else {
                            func_tg_wrong();
                        }
                    }, 100);
                }
            });

            inpCtrlV.addEventListener('blur', function (e) {
                if (!correctAttempt) {
                    inpCtrlV.value = '';
                }
            });


            //делаем все что надо по странице
            function full_execution() {
                let nextButton = document.querySelector('.createPageButton');
                if (nextButton) {
                    nextButton.disabled = false;
                    nextButton.classList.remove('disabled')
                }


                func_tg_vcr();


                const inpCtrlV = document.getElementById('ctrlV');

                if (inpCtrlV) {
                    inpCtrlV.value = 'Выделите весь этот текст, без кавычек';
                    inpCtrlV.classList.add('disabled');
                    inpCtrlV.readOnly = true;

                }


            }
            <?php
            if ($_SESSION['user_progress'] >= 30) {
                echo "full_execution();";
            }
            ?>

        }

    });
</script>
</body>
</html>
