<?php
// Meta теги и favicon
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

// Подключаем онлайн Bootstrap CSS
$bootstrapCss = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
// offline bootstrap
$offlineBootstrapCss = 'src/css/OflineBootstrapCss.css';

echo '<link href="'. $bootstrapCss .'" rel="stylesheet" integrity="ha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" onerror="this.onerror=null;this.href=\''.$offlineBootstrapCss.'\';">';

// Подключаем остальные файлы CSS
$cssFiles = array(
    'src/css/loading_the_wheel.css',
    'src/css/indentation.css',
    'src/css/bootstrap.css',
    'src/css/material.css',
    'src/css/material/style.css',
    'src/css/material/hotkeys/alignment.css',
    'src/css/material/screenshots/alignment.css',
    'src/css/comment.css',
    'src/css/img.css'
);

foreach ($cssFiles as $cssFile) {
    if (file_exists($cssFile)) {
        echo '<link rel="stylesheet" href="'. $cssFile. '">';
    }
}

// Подключаем файлы PHP
include 'process_comment.php';
include 'src/php/navbar_creator.php';

// Подключаем онлайн Bootstrap JS
$bootstrapJs = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js';
// offline bootstrap
$offlineBootstrapJs = 'src/js/OflineBootstrapJs.js';

echo '<script src="'. $bootstrapJs .'" integrity="ha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" onerror="this.onerror=null;this.src=\''.$offlineBootstrapJs.'\';"></script>';

// Подключаем остальные файлы JavaScript
$jsFiles = array(
    'src/js/material.js',
    'src/js/material_settings.js',
    'src/js/unblocking_lesson.js',
    'src/js/message_for_phones.js',
    'src/js/transition.js',
    'src/js/footer.js',
    'src/js/loading_the_wheel.js',
    'src/js/favicon.js'
);

foreach ($jsFiles as $jsFile) {
    if (file_exists($jsFile)) {
        echo '<script src="'. $jsFile. '"></script>';
    }
}
?>
