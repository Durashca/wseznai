<?php
// Подключаем файлы CSS
$cssFiles = array(
    array(
        'href' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        'rel' => 'stylesheet',
        'integrity' => 'ha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN',
        'crossorigin' => 'anonymous'
    ),
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
    if (is_array($cssFile)) {
        echo '<link href="'. $cssFile['href']. '" rel="'. $cssFile['rel']. '" integrity="'. $cssFile['integrity']. '" crossorigin="'. $cssFile['crossorigin']. '">';
    } else {
        if (file_exists($cssFile)) {
            echo '<link rel="stylesheet" href="'. $cssFile. '">';
        }
    }
}

// Подключаем файлы PHP
include 'process_comment.php';
include 'src/php/navbar_creator.php';


// Подключаем файлы JavaScript
$jsFiles = array(
    array(
        'src' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        'integrity' => 'ha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL',
        'crossorigin' => 'anonymous'
    ),
    'src/js/material.js',
    'src/js/material_settings.js',
    'src/js/unblocking_lesson.js',
    'src/js/message_for_phones.js',
    'src/js/transition.js',
    'src/js/footer.js',
    'src/js/loading_the_wheel.js'
);

foreach ($jsFiles as $jsFile) {
    if (is_array($jsFile)) {
        echo '<script src="'. $jsFile['src']. '" integrity="'. $jsFile['integrity']. '" crossorigin="'. $jsFile['crossorigin']. '"></script>';
    } else {
        if (file_exists($jsFile)) {
            echo '<script src="'. $jsFile. '"></script>';
        }
    }
}

