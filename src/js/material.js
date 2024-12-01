addEventListener('DOMContentLoaded', function () {

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

    function createLesson(lessonInfo, index) {
        if (!lessonInfo || typeof lessonInfo!== 'object') {
            throw new Error('lessonInfo must be an object');
        }

        let lessonCode =
            `
        <div class="left-part-lesson">
            <a class="number-lesson">Урок ${index + 1}</a>
        </div>
        <div class="right-part-lesson">
            <h6 class="text-lesson name-lesson">${lessonInfo.name}</h6>
            <p class="text-lesson description-lesson">${lessonInfo.description}</p>
        </div>
    `;

        let lesson = createElement("a", "btn btn-primary lesson");
        lesson.innerHTML = lessonCode;

        let name = lesson.querySelector(".name-lesson");
        let description = lesson.querySelector(".description-lesson");
        let numberLesson = lesson.querySelector(".number-lesson");

        if (!name ||!description ||!numberLesson) {
            throw new Error('lesson must have name, description and numberLesson elements');
        }

        return new LessonElement(lesson, name.textContent, description.textContent, numberLesson.textContent, lessonInfo.link);
    }

    function createElement(tagName, className, parent = null) {
        let elem = document.createElement(tagName);
        elem.className = className;

        if (parent!== null) {
            parent.appendChild(elem);
        }

        return elem;
    }

    const material = {
        lessonElems: [],

        showLessons() {
            let materialElem = document.querySelector(".list-lessons");
            if (!materialElem) {
                throw new Error('materialElem must exist');
            }

            for (let elem of material.lessonElems) {
                materialElem.appendChild(elem.lessonButton);
            }
        },

        createLessons(lessonsInfo) {
            if (!lessonsInfo ||!Array.isArray(lessonsInfo)) {
                throw new Error('lessonsInfo must be an array');
            }

            let i = 0;
            for (let lesson of lessonsInfo) {
                let lessonElem = createLesson(lesson, i++);
                material.lessonElems.push(lessonElem);
            }
        },
    };

    let lessons = [
        new LessonInfo("Логин", "Разбираем понятия: авторизация, регистрация, аутентификация и тд.", "the_memo.html"),
        new LessonInfo("Сочетание Ctrl с другими клавишами", "Вставить, копировать, вырезать, отменить последнее действие", "hotkeys.html"),
        new LessonInfo("Numpad или цифровые клавиши", "home, end, Num Lock", "basic_keys.html"),
        new LessonInfo("F клавиши", "Настройка звука, яркости экрана, управление видео", "f_keys.html"),
        new LessonInfo("Скриншоты", "PrtScr", "screenshots.html"),
        new LessonInfo("Перенос файла через USB-подключение", "перенос файлов, документов, изображений", "transferring_files.html"),
        new LessonInfo("Скачивание приложений", "Скачиваем приложения", "download_the_application.html"),
        new LessonInfo("Удаление приложений", "Удаление ненужных программ", "uninstalling_an_application.html"),
        new LessonInfo("Исправление ошибок со звуком", "Исправление ошибок с воспроизведением звука", "audio_errors.html"),
        new LessonInfo("Пароль", "Варианты входа", "device_password.html")
    ];

    material.createLessons(lessons);
    material.showLessons();


})

