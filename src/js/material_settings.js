function LessonInfo(name, description, link) {
    this.name = name;
    this.description = description;
    this.link = link;
}

function LessonElement(lessonButton, name, description, numberLesson, link) {
    this.lessonButton = lessonButton;
    this.name = name;
    this.description = description;
    this.numberLesson = numberLesson;
    this.link = link;

    lessonButton.href = link;
}
/*добавляем элементы*/
let lessons = [

    new LessonInfo("Логин", "Разбираем понятия: авторизация, регистрация, аутентификация и тд.", "the_memo.php"),
    new LessonInfo("Глобальные горячие клавиши", "Вставить, копировать, вырезать, отменить последнее действие", "hotkeys.php"),
    new LessonInfo("Функциональные клавиши", "Учимся быстро перемещаться по тексту", "basic_keys.php"),
    new LessonInfo("F клавиши", "Настройка звука, яркости, видео", "f_keys.php"),
    new LessonInfo("Скриншоты", "Делаем скрин на пк(ноутбуке)", "screenshots.php"),
    new LessonInfo("Перенос файла через USB-подключение", "Изучаем способы переноса файлов, документов, изображений", "transferring_files.php"),
    new LessonInfo("Скачивание приложения", "Скачиваем приложения через браузер", "download_the_application.php"),
    new LessonInfo("Удаление приложения", "Удаляем ненужные программы", "uninstalling_an_application.php"),
    new LessonInfo("Ошибки со звуком", "Узнаем разные способы исправления ошибок с воспроизведением звука", "audio_errors.php"),
    new LessonInfo("Пароль", "Защищаем свой ПК или ноутбук от недоброжелателей", "device_password.php"),
];

material.createLessons(lessons);
material.showLessons();
