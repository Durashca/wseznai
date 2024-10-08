<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Передача файлов с телефона на пк</title>

    <style>

        .container_dsh {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto auto auto;
            gap: 10px;
        }

        .text-row {
            display: flex;
            align-items: center;
            padding-right: 10px;
        }

        .draggable {

            border: 1px solid black;
            border-radius: 15px;
            background: white;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
            position: relative;
            z-index: 1;
            touch-action: none; /* Устанавливаем обработку событий касания */
        }
    </style>


</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">Перенос файла с телефона на пк и наоборот</h1>
                    <div>
                        <h4>Рассмотрим пример ниже, чтобы понять заголовок этой страницы:</h4>
                        <p><i>Вы с фоткали с телефона какую-то картинку, её надо перенести на пк(ноутбук). Как это
                            сделать?</i></p>

                        <!--компоненты-->
                        <div class="keyboard-shortcut-block">
                            <h4>Для начала надо подготовить компоненты:</h4>
                            <ol>
                                <li>Ваш телефон (где находится картинка которая нам нужна)</li>
                                <li>Пк или ноутбук, на который надо перекинуть</li>
                                <li>Провод от зарядки</li>

                            </ol>
                            <img class="rounded d-block phone magnify"
                                 src="src/images/transferring_files/IMG_20240124_210255.jpg"
                                 alt="телефон-пк-вверх-сообщи">
                        </div>
                        <!---->

                        <div class="keyboard-shortcut-block">
                            <h4>Приступим к самому процессу:</h4>
                            <ol>
                                <!---->
                                <li>Вытащите провод от зарядки, которым вы подзаряжаете свой телефон.</li>
                                <img class="rounded d-block phone"
                                     src="src/images/transferring_files/HU42zg5Pjz4.jpg"
                                     alt="телефон-пк-вверх-сообщи">

                                <!---->
                                <li>Найдите вот такое отверстие или как его называют <b>порт</b>.</li>
                                <img class="rounded d-block"
                                     src="src/images/transferring_files/IMG_20240124_210032.jpg"
                                     alt="телефон-пк-раскрытое-сообщи">

                                <!---->

                                <li>Один конец провода подключите к телефону, другой к пк или ноутбуку.</li>

                                <img class="rounded d-block phone"
                                     src="src/images/transferring_files/phone_pc.jpg"
                                     alt="телефон-пк-вылез-сообщи">

                                <!---->
                                <li>Как только вы разблокируете телефон, вылезет сообщение. Нажмите на него и
                                    переключите с <b>Только зарядка</b>
                                    на <b>Передача фото</b>.
                                </li>

                                <!--скриншоты usb-подключения-->
                                <div class="container text-center">
                                            <img class="rounded d-block phone "
                                                 src="src/images/transferring_files/Screenshot1.jpg"
                                                 alt="телефон-пк-вылез-сообщи">
                                </div>
                                <!--карточка-->
                                <div  class="bd-callout-warning bd-callout">
                                    Если вы случайно закрыли панельку USB-подключение или она не появилась, то
                                    вы можете высунуть конец провода из телефона, и вставить его обратно.
                                </div>



                                <li>Осталось только, узнать путь к вашей фотографии.</li>
                            </ol>
                            <!--карточка-->
                            <div class="bd-callout bd-callout-info">

                                    <h6 >Путь - это маршрут. Он имеет остановки, которые в нашем
                                        случае, называются
                                        папками. На телефонах и пк все лежит в папочках, поэтому найти нужную фотку
                                        будет не просто.</h6>

                            </div>
                        </div>
                        <h4>Перейдем ненадолго к телефону:</h4>


                        <div class="keyboard-shortcut-block">
                            <h4>Чтобы найти путь к вашей фотографии надо:</h4>
                            <ol>
                                <li>Открыть галерею.</li>
                                <li>Нажмите на картинку, которую вы собираетесь перекинуть.</li>
                                <li>Найдите либо три точки или значок <b>i</b>. Если у вас <b>i</b>, то просто
                                    нажмите на нее. Если три точки, то найдите раздел <b>свойства</b> или
                                    <b>сведения</b> и нажмите на неё.
                                </li>
                                <img class="rounded d-block phone"
                                     src="src/images/transferring_files/EqIjk1_Auxg.jpg">
                                <li>Теперь надо найти строчку с путем.</li>
                                <img class="rounded d-block phone" src="src/images/transferring_files/scr_aplle.jpg">
                            </ol>
                        </div>
                        <div class= "card keyboard-shortcut-block">
                            <p><b>Путь к моей картинке получился таким:</b>( Внутренняя
                                память/Pictures/Screenshots/Screenshot_20240127_003312_com.huawei.photos.jpg).
                            У вас будет другой путь. Он покажет по каким папкам нам надо пройтись, чтобы найти нужную нам картинку.</p>

                        </div>


                        <div class="keyboard-shortcut-block">
                            <h4>Вернемся обратно к пк или ноутбуку:</h4>
                            <ol>
                                <li>Откроем на рабочем столе "Этот компьютер"(или как его называют <b>проводник</b>).
                                </li>
                                <img src="src/images/transferring_files/sreenshot_pc.png">
                                <li>В <b>проводнике</b> найдем наш подключенный телефон. Нажмем на него.</li>
                                <img src="src/images/transferring_files/img.png">
                                <li>Верхняя строчка будет показывать в какой <i>папке</i> мы находимся.</li>
                                <img src="src/images/transferring_files/img_1.png">
                                <li> Переходите по папкам чтобы прийти к картинке. </li>
                                <img src="src/images/transferring_files/img_2.png">
                                <li>Напомню, вы не должны повторять мой путь точь в точь, т. к. мой путь к картинки отличается от вашего.</li>
                                <img src="src/images/transferring_files/img_4.png">
                                <li>Чтобы закончить работу вытащите аккуратно провод с пк (или ноутбука) и телефона.</li>
                            </ol>
                        </div>
                        <!---->
                    </div>
                    <div class="keyboard-shortcut-block dashed">
                        <h4>Перетащите правильно варианты ответов</h4>
                        <div class="container_dsh">
                            <div class="text-row div2">
                                <p>Этот компьютер:</p> <!--див 2-->
                                <div id="div1" class="draggable">Pictures/Screenshots</div>
                            </div>
                            <div class="text-row div1">
                                <p>Промежуточные папки:</p> <!--див 1-->
                                <div id="div2" class="draggable">Внутренняя память</div>
                            </div>
                            <div class="text-row div3">
                                <p>Сам файл:</p> <!--див 3-->
                                <div id="div3" class="draggable">photo.png</div>
                            </div>
                        </div>
                    </div>
                    <div id="pre_emptive_letter" class="bd-callout "></div>
                </content>
            </div>
        </div>
    </div>
    <div id="transition_warning"  style="display: flex; justify-content: center; margin: 1% 0;" >
        <button id="createPageButton" type="button"
                class="btn btn-outline-success" >
            <a class="nav-link active" href="download_the_application.php">Сл. страница</a>
        </button>
    </div>
</div>

<div id="advertisement"></div>

<?php
include 'src/php/additionally.php';
include 'progress.php';
new_to_PC(60);
?>
<!--для перетаскивания дивов-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script>
        window.addEventListener('DOMContentLoaded', function() {
    // Определить ширину экрана
    const screenWidth = window.innerWidth;
    // Определить тип устройства на основе ширины
    if (screenWidth < 768) {
        /*телефон*/
        func_tg_dis()
        func_tg_vcr()
        

    } else if (screenWidth >= 768) {
        /*пк*/
        $(document).ready(function () {
            $(".draggable").draggable({
                revert: true,
                start: function (event, ui) {
                    $(".draggable").not(ui.helper).css('z-index', 1); // Перемещаем все дивы, кроме перетаскиваемого, на задний план
                    ui.helper.css('z-index', 2); // Поднимаем перетаскиваемый див на передний план
                }
            });

            $("#div1, #div2, #div3").droppable({
                drop: function (event, ui) {
                    var dragId = ui.draggable.attr("id");
                    var dropId = $(this).attr("id");

                    var temp = $("#" + dragId).html();
                    $("#" + dragId).html($("#" + dropId).html());
                    $("#" + dropId).html(temp);

                    $(".draggable").css('z-index', 1); // Перемещаем все дивы на задний план после завершения перетаскивания

                    checkDiv2Content(); // Проверяем содержимое div2 после перестановки
                }
            });
        });

        // Функция для проверки наличия текста "Внутренняя память" в div2
        function checkDiv2Content() {
            const div1Element = document.querySelector('.text-row.div1');
            const childDivsWithText = div1Element.querySelectorAll('.draggable');

            let containsPicturesScreenshots = false;

            childDivsWithText.forEach(function (childDiv) {
                if (childDiv.textContent.includes('Pictures/Screenshots')) {
                    containsPicturesScreenshots = true;
                }
            });

            if (containsPicturesScreenshots) {
                func_tg_vcr();
                func_tg_dis();
               
                // Выполнить нужные действия здесь
            } else {
                func_tg_wrong();
                // Выполнить другие действия здесь
            }
        }
    }

    // авто выполнение
    
    <?php

    if($_SESSION['user_progress'] > 60){
        // Автоматическое перетаскивание блоков на свои места
       echo "const div1Content = document.getElementById('div1').innerHTML;";
       echo "const div2Content = document.getElementById('div2').innerHTML;";
       echo "const div3Content = document.getElementById('div3').innerHTML;";

        echo "document.getElementById('div1').innerHTML = div2Content;";
        echo "document.getElementById('div2').innerHTML = div3Content;";
        echo "document.getElementById('div3').innerHTML = div1Content;";

        // Заблокировать блоки после автоматического перетаскивания
        echo "document.getElementById('div1').classList.add('disabled');";
        echo "document.getElementById('div2').classList.add('disabled');";
        echo "document.getElementById('div3').classList.add('disabled');";

        // Вызов функций для нужного состояния блоков
        echo "func_tg_dis();";
        echo "func_tg_vcr();";
    }
    ?>

        });
</script>

</body>
</html>