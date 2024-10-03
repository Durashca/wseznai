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
    new LessonInfo("Сочетание Ctrl с другими клавишами", "Вставить, копировать, вырезать, отменить последнее действие", "hotkeys.php"),
    new LessonInfo("Функциональные клавиши", "home, end, Num Lock", "basic_keys.php"),
    new LessonInfo("F клавиши", "Настройка звука, яркости экрана, управление видео", "f_keys.php"),
    new LessonInfo("Скриншоты", "PrtScr", "screenshots.php"),
    new LessonInfo("Перенос файла через USB-подключение", "перенос файлов, документов, изображений", "transferring_files.php"),
    new LessonInfo("Скачивание приложений", "Скачиваем приложения", "download_the_application.php"),
    new LessonInfo("Удаление приложений", "Удаление ненужных программ", "uninstalling_an_application.php"),
    new LessonInfo("Исправление ошибок со звуком", "Исправление ошибок с воспроизведением звука", "audio_errors.php"),
    new LessonInfo("Пароль", "Варианты входа", "device_password.php")

];

material.createLessons(lessons);
material.showLessons();
