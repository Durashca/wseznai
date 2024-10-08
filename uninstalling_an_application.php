<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Удаление приложений</title>

</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">Удаление приложений</h1>
                    <p>В предыдущем уроке вы научились скачивать, но как помните у скачивания есть один минус. Нельзя
                        скачивать много приложений, т. к. каждое приложение, нагружает ваше устройство, из-за этого Пк
                        или ноутбук может нагреваться, медленно работать или вообще вылетать. </p>
                    <div class="bd-callout bd-callout-info">Приложение в отличии, от изображения, документа или чего нибудь другого, очень сложно убрать. </div>
                    <div class="keyboard-shortcut-block">
                        <h4>Научимся подчищать память:</h4>
                        <ol>
                            <li>Зайдите в <b>Этот компьютер</b> на рабочем столе.</li>
                            <img src="src/images/uninstalling_an_application/img_1.png">
                            <li>Выберите вкладку загрузки</li>
                            <img src="src/images/uninstalling_an_application/img_2.png">
                            <li>Здесь можно увидеть, все что вы когда либо скачивали.</li>
                            <li>Выделите ненужные файлы, зажав левую кнопку мышки.</li>
                            <img src="src/images/uninstalling_an_application/img.png">
                            <li>Один раз нажмите правой кнопкой мыши, на выделенную область.</li>
                            <li>Выбираем из списка <b>Удалить</b>.</li>
                            <img src="src/images/uninstalling_an_application/img_3.png">
                            <li>Мы можем заметить что они исчезли, но на самом деле это не так.</li>
                            <div class="bd-callout bd-callout-info">Все удаленные файлы, отправляются в <b>корзину</b>.
                                Она находится на рабочем столе и служит спасательным кругом, если вы случайно удалили не
                                то что надо.
                            </div>
                            <img src="src/images/uninstalling_an_application/img_4.png">
                            <li>Корзина очищается через определенное время.Но вы можете сами удалить то, что
                                считаете точно уже не пригодится.
                            </li>
                            <li>Но и это еще не все!</li>
                        </ol>
                    </div>
                    <div class="keyboard-shortcut-block">
                        <h4>Надо удалить приложение через систему поиска</h4>
                        <ol>
                            <li>В <b>поиске</b>, вводим: <b>удаление</b> и нажимаем <b>Enter</b></li>
                            <img src="src/images/uninstalling_an_application/img_4.png">
                            <li>Нажмите на приложение которое хотите убрать и выберите <b>удалить</b>.</li>
                            <img src="src/images/uninstalling_an_application/img_5.png">
                        </ol>
                    </div>
                    <div class="keyboard-shortcut-block dashed">
                        <h4>Какие минусы скачивания приложений:</h4>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Риск безопасности
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                            <label class="form-check-label"for="flexRadioDefault2" >
                                Быстрота и легкость
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Некоторые приложения могут работать в офлайн режиме
                            </label>
                        </div>
                        <button id="btn-task-check" class="btn btn-outline-success">Ответить</button>
                    </div>

                </content>
            </div>
        </div>
    </div>
    <div id="transition_warning"  style="display: flex; justify-content: center; margin: 1% 0;">
        <button id="createPageButton" type="button"
                class="btn btn-outline-success">
            <a class="nav-link active" href="audio_errors.php">Сл. страница</a>
        </button>
    </div>
</div>

<div id="advertisement"></div>

<?php
include 'src/php/additionally.php';
include 'progress.php';
new_to_PC(80);

?>

<script>
    document.addEventListener('DOMContentLoaded', function() {


    let radio = document.getElementById('flexRadioDefault1')
    btn_task_check.addEventListener('click', function (){
        if (radio.checked){
            func_tg_dis()
            func_tg_vcr()

            for (let elem of radio_arr){
                elem.classList.add('disabled');
            }
        }else {
            func_tg_wrong()
        }
    })




    <?php
    if($_SESSION['user_progress'] >= 90){
       echo "func_tg_dis();";
       echo "func_tg_vcr();";
       echo "for (let elem of radio_arr){";
       echo "elem.classList.add('disabled');";
       echo "};";
       echo "radio_arr[0].checked = true;";


    }    
    ?>
});
</script>
</body>
</html>