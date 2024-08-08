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
                    <p>F клавиши выполняют ряд полезных функций: регулировка громкости звука, яркости,
                        пауза/воспроизведение и т.д. Правда, наличие той или иной функции зависит от модели и
                        производителя клавиатуры. В этом уроке пойдет разговор, связанный больше с клавиатурой ноутбука,
                        чем с клавиатурой ПК.</p>
                    <div class="bd-callout bd-callout-info">Клавиатура ноутбука немного отличается от клавиатуры ПК.
                        Да и клавиатуры ноутбуков не одинаковы.
                    </div>
                    <p>Поэтому точных рекомендаций не дам, но постараюсь ясно объяснить, как работают эти клавиши.</p>
                    <div class="keyboard-shortcut-block">
                        <h4>Разберемся в использовании F клавиш с зажатием <b>Fn</b>.</h4>
                        <div class="bd-callout bd-callout-info">На F клавишах нарисованы картинки,
                            это и есть функция, которую выполняет эта клавиша.
                        </div>
                        <ol>
                            <li>Зажимаем клавишу <b>Fn</b></li>
                            <li>Нажимаем 1 раз клавишу: F1, F2, F3, F4 и т.д.</li>
                        </ol>
                    </div>

                    <div class="bd-callout bd-callout-info">На некоторых клавиатурах четыре стрелочки выполняют
                        те же функции, что и F клавиши. В этом случае вместо F клавиши, нажмите на стрелочку и не
                        забывайте удерживать <b>Fn</b>.
                    </div>
                    <p>Если нажимать F клавиши без <b>Fn</b>, то они будут выполнять совершенно другие функции, как на ПК, так и на ноутбуке. На всякий случай уточню, что на ПК нет клавиши <b>Fn</b>.</p>
                    <div class="keyboard-shortcut-block dashed">
                        <label for="inputFN">Напишите клавишу, которая отвечает за специальных функций(начинается на F, а заканчивается на n)</label>
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
?>
<script>
    let inp_fn = document.getElementById('inputFN');

    // Определить тип устройства на основе ширины
    if (window.innerWidth < 768) {
        func_tg_dis();
        func_tg_vcr();
        <?php
        include 'progress.php';
        new_to_PC(30);
        ?>
    }else {


        inp_fn.addEventListener('input', function () {
            let inputValue = inp_fn.value.toUpperCase(); // Преобразование в верхний регистр

            if (inputValue === 'FN') {
                func_tg_dis();
                func_tg_vcr();
                <?php
                include 'progress.php';
                new_to_PC(30);
                ?>
            } else {
                func_tg_wrong();
            }
        });
    }
    // авто выполнение
    if (userProgress[3]){
        inp_fn.value = 'Fn'
        inp_fn.disabled = true
        func_tg_dis();
        func_tg_vcr();
    }
</script>
</body>
</html>
