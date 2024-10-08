<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Учимся скачать приложение</title>


</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">Безопасное скачивание приложения</h1>
                    <p>Вместо того чтобы рассказывать, для чего нужно скачивать какие-то приложения, я покажу минусы и
                        плюсы:</p>
                    <div class="bd-callout bd-callout-green">
                        <h5>Плюсы скачивания приложений:</h5>
                        <ol>
                            <li> Удобство: Приложения помогают нам выполнять различные задачи быстро и легко.</li>
                            <!-- <li> Функциональность: Мы можем слушать музыку, играть в
                                 игры, делать видеозвонки и многое другое.
                             </li> -->
                            <li> Связь и общение: Благодаря приложениям мы можем легко обмениваться сообщениями,
                                фотографиями и видео,
                                независимо от расстояния, а также
                                находиться на связи в социальных сетях.
                            </li>
                            <li>Работа офлайн: Некоторые приложения позволяют работать без подключения к интернету, что
                                удобно в ситуациях с плохим сигналом или без доступа к сети.
                            </li>
                        </ol>
                    </div>


                    <div class="bd-callout bd-callout-red">
                        <h5>Минусы скачивания приложений:</h5>
                        <ol>
                            <li> Риск безопасности: Существует вероятность скачать вредоносное приложение, которое может
                                навредить вашему устройству или привести к утечке информации.
                            </li>
                            <li> Ограниченные ресурсы: приложения могут привести к быстрому разряду батареи и заполнению
                                памяти устройства. Из-за последнего, нельзя скачивать много приложений.
                            </li>

                        </ol>
                    </div>
                    <div class="bd-callout bd-callout-info">
                        <h4 style="margin: 0"><i>Приложения скачиваются через</i> <b>браузер</b>.</h4>
                    </div>
                    <div class="keyboard-shortcut-block">
                        <h4>Научимся скачивать приложение:</h4>
                        <ol>
                            <li>Зайдем в <b>браузер</b>.</li>
                            <li>В поисковой строке пишем приложение, которое хотим скачать на пк или ноутбук.</li>
                            <p>Я возьму в пример: <b><i>Вконтакте(VK)</i></b>.</p>
                            <img src="src/images/download_the_application/img_2.png">
                            <li>Дальше ищем ссылку где было бы написано: <b>Скачать ... на ПК</b>.</li>
                            <img src="src/images/download_the_application/img_3.png">
                            <li>На сайте найдем кнопку: <b>Скачать(Downland)</b>.</li>
                            <img src="src/images/download_the_application/img_4.png">
                            <li>Наше приложенье отправилось в загрузки.</li>
                            <li>Найдите в вашем браузере три точки и нажмите на них. Из списка выберите загрузки.</li>
                            <img src="src/images/download_the_application/img_5.png">
                            <li>Вы увидите все скаченные файлы.</li>
                            <li>Найдите приложение которое вы скачали и
                                нажмите: <b>показать в папке</b></li>
                            <img src="src/images/download_the_application/img_6.png">
                            <li>Когда вы перейдете в <b>проводник(Этот компьютер)</b>, кликните правой кнопкой мыши по
                                приложению и выберете <i>открыть</i></li>
                            <img src="src/images/download_the_application/img_7.png">
                            <li>Ваш пк или ноутбук потребует согласия на установку, нажмите все такие кнопки: <i>разрешить,
                                далее, продолжить, финиш(finish) или завершить.</i></li>
                            <li>Всеее, Приложение скачено и ожидает вас на рабочем столе.</li>
                        </ol>
                    </div>

                    <div class="keyboard-shortcut-block dashed">
                        <h4>Попробуйте правильно установить приложение телеграмм</h4>
                        <a href="https://apps.microsoft.com/detail/9nztwsqntd0s?hl=ru-ru&gl=RU" style="color: #3366cc; text-decoration: none; cursor: pointer; transition: all 0.3s ease;" target="_blank">Перейдите в Microsoft Store и скачайте телеграмм</a>
                    </div>

                </content>
            </div>
        </div>
    </div>
    <div id="transition_warning"  style="display: flex; justify-content: center; margin: 1% 0;">
        <button id="createPageButton" type="button"
                class="btn btn-outline-success">
            <a class="nav-link active" href="uninstalling_an_application.php">Сл. страница</a>
        </button>
    </div>
</div>

<div id="advertisement"></div>

<?php
include 'src/php/additionally.php';
include 'progress.php';
new_to_PC(70);
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {


            const link = document.querySelector('a[href="https://apps.microsoft.com/detail/9nztwsqntd0s?hl=ru-ru&gl=RU"]');

            link.addEventListener('click', function(event) {
                event.preventDefault();
                func_tg_dis();
                func_tg_vcr()
                
                setTimeout(function() {
                    window.open(link.getAttribute('href'), '_blank');
                }, 1300); // Переход через 1.3 секунды (можете изменить задержку по вашему усмотрению)
            });


        
    <?php

    if($_SESSION['user_progress'] > 70){
       echo "func_tg_dis();";
        echo "func_tg_vcr();";
    }    
    ?>

    });
</script>

</body>
</html>