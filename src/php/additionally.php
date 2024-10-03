<?php
// Meta теги и favicon
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

// Подключаем файлы CSS
$cssFiles = array(

    'src/css/OflineBootstrapCss.css',
    'src/css/loading_the_wheel.css',
    'src/css/indentation.css',
    'src/css/bootstrap.css',
    'src/css/material.css',
    'src/css/material/container_material.css',
    'src/css/material/hotkeys/alignment.css',
    'src/css/material/screenshots/alignment.css',
    'src/css/comment.css',
    'src/css/img.css',
    'src/css/menu.css',
    'src/css/advertisement.css'


);

foreach ($cssFiles as $cssFile) {

        if (file_exists($cssFile)) {
            echo '<link rel="stylesheet" href="'. $cssFile. '">';
        }

}

// Подключаем файлы PHP
include 'process_comment.php';
include 'src/php/navbar_creator.php';


// Подключаем файлы JavaScript
$jsFiles = array(

    'src/js/OflineBootstrapJs.js',
    'src/js/material.js',
    'src/js/material_settings.js',
    'src/js/unblocking_lesson.js',
    'src/js/message_for_phones.js',
    'src/js/transition.js',
    'src/js/footer.js',
    'src/js/loading_the_wheel.js',
    'src/js/favicon.js',
    'src/js/advertisement.js',
    'src/js/transition_warning.js'




);

foreach ($jsFiles as $jsFile) {

        if (file_exists($jsFile)) {
            echo '<script src="'. $jsFile. '"></script>';
        }

}


if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_name']) && !isset($_SESSION['user_email'])) {

    echo "<script>

    let blocking_the_comment_button = document.getElementById('sending_comment_button');
    blocking_the_comment_button.classList.add('disabled');
    </script>";
}

