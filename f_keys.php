<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>F клавиши</title>
    <!-- Подключение Bootstrap -->

</head>
<body>
<div class="container-xxl">
    <div class="container text-left">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">F клавиши</h1>
                    <p>Fn (Function) - это клавиша на ноутбуке, которая используется для активации специальных функций клавиш. Когда вы нажимаете клавишу Fn вместе с другой клавишей, она изменяет ее поведение.</p>
                    <p>Например, если у вас есть клавиша F1, которая обычно вызывает справку, то при нажатии Fn + F1 она может регулировать яркость экрана.</p>
                    <div class="bd-callout bd-callout-info">Клавиатура ноутбука отличается от клавиатуры ПК, как раз в этих кнопках Fn. Да и клавиатуры ноутбуков не одинаковы. Они могут иметь разные расположения клавиш и функций.</div>
                    <p>Поэтому точных рекомендаций не дам, но постараюсь ясно объяснить, как работают эти клавиши.</p>
                    <div class="keyboard-shortcut-block">
                        <h4>Разберемся в использовании F клавиш с зажатии <b>Fn</b>.</h4>
                        <div class="bd-callout bd-callout-info">На F клавишах нарисованы изображения, это и есть функция, которую выполняет эта клавиша при зажатии Fn.</div>
                        <ol>
                            <li>Зажимаем клавишу <b>Fn</b>.</li>
                            <li>Нажимаем 1 раз клавишу: F1, F2, F3, F4 и т.д.</li>
                        </ol>
                    </div>
                    <div class="bd-callout bd-callout-info">На некоторых клавиатурах четыре стрелочки выполняют те же функции, что и F клавиши. В этом случае вместо F клавиши, нажмите на стрелочку и не забывайте удерживать <b>Fn</b>.</div>
                    <p>Если нажимать F клавиши без <b>Fn</b>, то они будут выполнять стандартные функции, как на ПК. На всякий случай уточню, что на ПК нет клавиши <b>Fn</b>.</p>
                    <div class="keyboard-shortcut-block dashed">
                        <label for="inputFN">Напишите клавишу, которая отвечает за специальные функции (начинается на F, а заканчивается на n)</label>
                        <input style="margin-top: 1%" id="inputFN">
                    </div>
                </content>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; margin: 1% 0;">
        <button id="createPageButton" type="button" class="btn btn-outline-success">
            <a class="nav-link active" href="screenshots.php">Сл. страница</a>
        </button>
    </div>
</div>

<?php
include 'src/php/additionally.php';
include 'progress.php';
new_to_PC(40);
?>
<script>
    window.addEventListener('DOMContentLoaded', function() {
    let inp_fn = document.getElementById('inputFN');


        inp_fn.addEventListener('input', function () {
            let inputValue = inp_fn.value.toUpperCase(); // Преобразование в верхний регистр

            if (inputValue === 'FN' || inputValue === 'FUNCTION' ) {
                func_tg_dis();
                func_tg_vcr();
            } else {
                func_tg_wrong();
            }
        });

    // авто выполнение
    <?php
    if($_SESSION['user_progress'] > 40){
        echo "inp_fn.value = 'Fn';";
        echo "inp_fn.disabled = true;";
        echo "func_tg_dis();";
        echo "func_tg_vcr();";
    }
        
    ?>
})
</script>
</body>
</html>
