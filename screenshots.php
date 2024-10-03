<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Скриншоты</title>
    <!--подключение Бутстрапа-->
    
 
</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">
                <content>
                    <h1 class="title text-center">Скриншоты</h1>
                    <p>Если коротко, то скриншот - это снимок экрана. Бывает такие моменты когда надо показать экран телефона или ПК, и не все знают как правильно сделать.</p>
                    <div class="keyboard-shortcut-block">
                        <h4>Сравните два примера ниже. Какая выглядит привлекательней?</h4>
                        <ol>
                            <li>Скриншот с ноутбука (ПК)</li>
                            <img src="src/images/screenshots-material/screenshot_from_computer.png" class="show-img" alt="скриншот-с-пк">
                            <li>Скриншот с телефона</li>
                            <img src="src/images/screenshots-material/photo_from_phone.jpg" class="show-img" alt="фото-с-телефона">
                        </ol>
                        <p>Выберите какая картинка лучше -> <select id="answer_to_screen">
                                <option>Картинка №1</option>
                                <option selected>Картинка №2</option>
                            </select></p>
                    </div>
                    <div class="keyboard-shortcut-block">
                        <h4>Для того чтобы сделать скриншот на ПК, следуйте следующей инструкции:</h4>
                        <ol>
                            <li>В правой верхней части клавиатуры найдите и нажмите 1 раз кнопку <b>Prt Src</b> (или <b>Prt Sc</b>)</li>
                            <div class="bd-callout bd-callout-info">Если у вас <b>Prt Src</b> находится на F клавише, то зажмите <b>Fn</b> и нажмите на клавишу с текстом <b>Prt Src</b>.</div>
                            <li>Чтобы посмотреть картинку, вы можете вставить ее куда-нибудь, например в <b>Word</b> или <b>Paint</b>.</li>
                        </ol>
                    </div>
                    <div class="keyboard-shortcut-block dashed">
                        <h4>Сделайте скриншот нажав определенную кнопку и вставьте в поле ниже картинку с помощью <b>Ctrl</b> + <b>V</b> или правой кнопкой мыши, <b>вставить</b>:</h4>
                        <ol>
                            <div style="border: 1px solid black; background: white;"  class="keyboard-shortcut-block" contenteditable="true" id="editableDiv"></div>
                        </ol>
                        <button id="btn-task-check" class="btn btn-outline-success">Ответить</button>
                    </div>
                    <div class="bd-callout bd-callout-info">Можете попробовать вставить <b>скриншот</b> в <b>Word</b></div>
                    <div id="pre_emptive_letter" class="bd-callout"></div>
                </content>
            </div>
        </div>
    </div>
    <div id="transition_warning"  style="display: flex; justify-content: center; margin: 1% 0;">
        <button id="createPageButton" type="button"
                class="btn btn-outline-success">
            <a class="nav-link active" href="transferring_files.php">Сл. страница</a>
        </button>
    </div>
</div>

<div id="advertisement"></div>

<?php
include 'src/php/additionally.php';
include 'progress.php';
new_to_PC(50);
?>
<script>
    window.addEventListener('DOMContentLoaded', function() {
    // Определить ширину экрана
    const screenWidth = window.innerWidth;
    // инпут задания
    const editableDiv = document.getElementById('editableDiv');
    // Определить тип устройства на основе ширины
    if (screenWidth < 768) {
        /*телефон*/
        func_tg_dis();
        func_tg_vcr();
        
    } else {
        /*пк*/

        let imagePasted = false;

        // Проверяем, есть ли сохраненное изображение при загрузке страницы
        const savedImage = localStorage.getItem("userImage");
        if (savedImage) {
            editableDiv.innerHTML = `<img src="${savedImage}" alt="saved-image">`;
            imagePasted = true;
        }

        editableDiv.addEventListener('paste', function (e) {
            if (imagePasted) {
                e.preventDefault();
                return;
            }

            const clipboardData = e.clipboardData || window.clipboardData;
            const items = clipboardData.items;
            let containsImage = false;

            for (let i = 0; i < items.length; i++) {
                if (items[i].type.indexOf('image') !== -1) {
                    containsImage = true;
                    const file = items[i].getAsFile(); // Получаем файл изображения
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        const imageSrc = e.target.result;
                        localStorage.setItem("userImage", imageSrc); // Сохраняем изображение в localStorage
                        editableDiv.innerHTML = `<img src="${imageSrc}" alt="pasted-image">`; // Вставляем изображение
                        imagePasted = true;
                    };

                    reader.readAsDataURL(file); // Читаем изображение как Data URL
                    break;
                }
            }

            if (!containsImage) {
                e.preventDefault();
            }
        });

        const btnTaskCheck = document.getElementById('btn-task-check');
        btnTaskCheck.addEventListener('click', function () {
            if (imagePasted) {
                func_tg_dis();
                func_tg_vcr();

            } else {
                func_tg_wrong();
            }
        });

        <?php
        if ($_SESSION['user_progress'] >= 60) {
            echo "func_tg_dis();";
            echo "func_tg_vcr();";

        }
        ?>
    }
});
</script>
</body>
</html>
