<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Базовые функции</title>
    <!--подключение Бутстрапа-->

</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">Функциональные клавиши</h1>
                    <h4>Мы более-менее выяснили в предыдущем уроке для чего нужны горячие клавиши.</h4>
                    <p>Но горячих клавиш намного больше!!! Поэтому, я посвящу еще один урок этой теме.</p>
                    <p>Чтобы использовать клавиши о которых пойдет речь в этом уроке, вам надо знать что делает кнопка <b>Num Lk</b> (она в правой части клавиатуры).</p>

                    <div class="bd-callout bd-callout-red">
                        Обратим внимание, что под <b>Num Lk</b>, есть цифры и по углам расположены английские слова. Так вот, <b>Num Lk</b> переключает с цифр на эти слова и обратно. Если вы увидите что во время выполнения задания вы поставили цифру, то у вас включен <b>Num Lk</b>. Нажмите на него, чтобы выключить.
                    </div>

                    <div class="keyboard-shortcut-block">
                        <h4>Научимся быстро перемещаться в начало строки:</h4>
                        <ol>
                            <li>Кликните, так чтобы курсор был в конце строки</li>
                            <input type="text" style="width: 100%" value="Hooooooooooooooooooooooooooooooooome">
                            <li>Найдите кнопку <b>Home</b> (она находится в рядом с <b>Num Lk</b>).</li>
                            <li>Нажмите на нее 1 раз.</li>
                            <li>Если вы поставили семерку, то нажмите на <b>Num Lk</b> и повторите все еще раз.</li>
                            <li>Посмотрите, на курсор, если он вначале строки, то у вас получилось.</li>
                        </ol>
                    </div>

                    <div class="keyboard-shortcut-block">
                        <h4>Научимся быстро перемещаться в конец строки:</h4>
                        <ol>
                            <li>Кликните, так чтобы курсор был вначале строки</li>
                            <input type="text" style="width: 100%" value="Пример текста для проверки курсора">
                            <li>Найдите кнопку <b>End</b> (она находится ниже с <b>Home</b>).</li>
                            <li>Нажмите на нее 1 раз.</li>
                            <li>Если вы не перешли в конец строки курсором, а поставили единичку, то нажмите на <b>Num Lk</b> и повторите все еще раз.</li>
                            <li>Посмотрите, на курсор, если он в конце строки, то у вас получилось.</li>
                        </ol>
                    </div>

                    <div class="bd-callout bd-callout-info">Используйте <b>Home</b> и <b>End</b> в любых средах таких как: <i>Word</i>, <i>блокнот</i> и тд.</div>

                    <div class="bd-callout bd-callout-warning">
                        Если вы работаете в браузере, то наведите сперва на поле с текстом!!! Потому что, <b>Home</b> и <b>End</b> не только могут перемещать курсор вперед и назад текста, но и мотать страницу вверх (<b>Home</b>) и вниз (<b>End</b>) если курсор не стоит не в каком поле для введения текста.
                    </div>

                    <h3 style="margin-bottom: 1%">Научимся быстро перемещаться в верх (Home) и вниз (End) по сайту:</h3>

                    <!--Home-->
                    <div class="keyboard-shortcut-block">
                        <h4>Изучим как быстро перемещаться в <b>Home</b> (вверх) сайта:</h4>
                        <ol>
                            <li>Кликните в любую точку сайта, <b>только не на текстовое поле!</b></li>
                            <li><b>Пример текстового поля</b> -> <input></li>
                            <li>Нажмите 1 раз кнопку <b>Home</b>.</li>
                            <li>Если вы не переместились на верхушку сайта, то у вас включен <b>Num Lk</b>, нажмите на него, чтобы отключить.</li>
                        </ol>
                    </div>
                    <!--End-->
                    <div class="keyboard-shortcut-block">
                        <h4>Научимся делать то же самое, но с <b>End</b> (конец) на сайте:</h4>
                        <ol>
                            <li>Кликните в любую точку сайта, <b>только не на текстовое поле!</b></li>
                            <li>Нажмите 1 раз кнопку <b>End</b>.</li>
                            <li>Если вы не переместились в самый конец сайта, то у вас включен <b>Num Lk</b>, нажмите на него, чтобы отключить.</li>
                        </ol>
                    </div>
                    <div class="keyboard-shortcut-block dashed">
                        <h4>Поставьте курсор в поле для проверки:</h4>
                        <input style="width: 100%" type="text" id="userChInput" value="Пример текста для проверки курсора">
                    </div>
                    <div id="pre_emptive_letter" class="bd-callout"></div>
                </content>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; margin: 1% 0;">
        <button id="createPageButton" type="button"
                class="btn btn-outline-success">
            <a class="nav-link active" href="f_keys.php">Сл. страница</a>
        </button>
    </div>
</div>
<?php
include 'src/php/additionally.php';
    include 'progress.php';
    new_to_PC(30);

?>

<script>
 window.addEventListener('DOMContentLoaded', function() {
    const userChInput = document.getElementById('userChInput');
    // Определить ширину экрана
    const screenWidth = window.innerWidth;
    // Определить тип устройства на основе ширины
    if (screenWidth < 768) {
        /*телефон*/
        func_tg_dis();
        func_tg_vcr();
        userChInput.disabled = true;


    }else{
        /*пк*/
        userChInput.addEventListener('keydown', function checkCursor() {
            userChInput.focus();
            const cursorPosition = userChInput.selectionStart;

            if (cursorPosition === 0 || cursorPosition === userChInput.value.length) {
                func_tg_dis();
                func_tg_vcr();

            } else {
                func_tg_wrong()
            }
        })

    let previousValue = userChInput.value;

    userChInput.addEventListener('input', function(event) {
        if (userChInput.value.length < previousValue.length) {
            userChInput.value = previousValue;
        } else {
            previousValue = userChInput.value;
        }
    });

        // авто выполнение
        <?php
        if ($_SESSION['user_progress'] >= 40) {
            echo "userChInput.disabled = true;";
            echo "func_tg_dis();";
            echo "func_tg_vcr();";
        }
        ?>


    }

});
</script>
</body>
</html>