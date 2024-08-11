<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Ошибки со звуком</title>
</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">Ошибки со звуком</h1>
                    <p>Наверное с вами происходила такая проблема, что вы включили видео, а звука нет. Если приключились
                        такое дело на ПК, то попробуйте проверить хорошо ли подключены динамики, на ноутбуке динамики
                        встроенные, поэтому здесь только в ремонт. </p>
                    <div class="keyboard-shortcut-block">
                        <h4>Исправим проблему:</h4>
                        <ol>
                            <li>Посмотрим на значок звука на видео, вдруг он на минимальной громкости или вообще
                                выключен.
                            </li>
                            <img src="src/images/audio_errors/img.png">
                            <li>Перетащите кружочек вправо.</li>
                            <img src="src/images/audio_errors/img_1.png">
                            <li>Проверьте включен ли у вас звук на самом пк или ноутбуке(
                                он расположен правом нижнем углу).
                            </li>
                            <img src="src/images/audio_errors/img_2.png">
                            <li>Перетащите бегунок вправо.</li>
                            <img src="src/images/audio_errors/img_3.png">
                            <li>Если все перечисленное не сработало, то нажмите правой кнопкой мыши на значок
                                звука(который снизу слева).
                            </li>
                            <img src="src/images/audio_errors/img_4.png">
                            <li>Выберите: <b>устранение неполадок со звуком</b>.</li>
                        </ol>
                    </div>
                    <div class="bd-callout bd-callout-warning">Если звук не удалось исправить, то ноутбук надо сдать
                        в ремонт, а если проблема на пк, попробуйте купить новые динамики. Ну есть конечно еще способ...
                    </div>
                    <p>Можно попробовать вывести звук через беспроводные наушники или колонку.</p>
                    <div class="bd-callout bd-callout-info">Беспроводные наушники, колонки, мышки, клавиатуры - это все
                        блютуз(Bluetooth) устройства.
                    </div>
                    <div class="keyboard-shortcut-block">
                        <h4>Попробуем, этот способ:</h4>
                        <ol>
                            <li>Включим беспроводную колонку или наушники.</li>
                            <li>Найдем на рабочем столе квадратик( в нижнем правом углу) и нажмем на него.</li>
                            <img src="src/images/audio_errors/img_5.png">
                            <li>Далее нажмем на <b>Bluetooth</b>, так мы подключим наше беспроводную колонку или
                                наушники, чтобы отключить связь, просто нажмите второй раз на эту кнопку.
                            </li>
                            <img src="src/images/audio_errors/img_6.png">
                            <li>Ждем пока подключится наше устройство.</li>
                            <img src="src/images/audio_errors/img_7.png">
                        </ol>
                    </div>
                    <div class="bd-callout bd-callout-info">Если беспроводная колонка или наушники не отображаются,
                        значит надо вручную подключить его к ПК
                        или ноутбуку, а потом он запомнит беспроводное устройство и сам будет подключаться.
                    </div>
                    <div>
                        <div class="keyboard-shortcut-block">
                            <h4>Добавим наше беспроводное устройство.</h4>
                            <ol>
                                <Li>Слева от процента заряда, будет уголок, нажмем сперва на него, а потом на английскую
                                    букву <b>B</b></Li>
                                <img src="src/images/audio_errors/img_8.png">
                                <li>Нажимаем <b>Добавление устройства по Bluetooth</b>.</li>
                                <img src="src/images/audio_errors/img_9.png">
                                <li>Выбираем <b>Добавление Bluetooth или другого устройства</b>.</li>
                                <img src="src/images/audio_errors/img_10.png">
                                <li>Жмем на <b>Bluetooth</b>.</li>
                                <img src="src/images/audio_errors/img_11.png">
                                <li>Находим наше устройство. Не забудьте, что у вас должно быть включено беспроводное
                                    устройство.
                                </li>
                                <img src="src/images/audio_errors/img_12.png">
                                <li>Ждем когда подключится.</li>
                                <img src="src/images/audio_errors/img_13.png">
                                <li>Все, можно пользоваться.</li>

                            </ol>
                        </div>

                    </div>

                    <div class="keyboard-shortcut-block dashed">
                        <h4>Попробуйте исправить звук на видео ниже</h4>

                    </div>
                </content>
            </div>
        </div>
    </div>
    <div style="display: flex; justify-content: center; margin: 1% 0;">
        <button id="createPageButton" type="button"
                class="btn btn-outline-success">
            <a class="nav-link active" href="device_password.php">Сл. страница</a>
        </button>
    </div>
</div>

<?php
include 'src/php/additionally.php';
include 'progress.php';
new_to_PC(90);
?>

<script>
     document.addEventListener('DOMContentLoaded', function() {
    const videoElement = document.createElement('video');
    videoElement.src = 'src/video/video_audio.mp4';
    videoElement.controls = true;
    videoElement.muted = true; // выключаем звук по умолчанию
    let checked = false

    videoElement.onvolumechange = function() {
        if (!videoElement.muted) {
            func_tg_dis();
            func_tg_vcr();
            updateProgress(9);
            checked = true
        } else {
         if(checked){
             func_tg_wrong();
         }
        }
    };

    const keyboardShortcutBlock = document.querySelector('.keyboard-shortcut-block.dashed');
    keyboardShortcutBlock.appendChild(videoElement);


    <?php
    session_start();
    if($_SESSION['user_progress'] > 90){
        echo "func_tg_dis();";
        echo "func_tg_vcr();";
        echo "videoElement.muted = false;";
    }    
    ?>
     });
</script>
</body>
</html>