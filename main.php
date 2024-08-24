<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Описание вашего сайта с ключевыми словами">
    <meta name="keywords" content="wseznai, всезнай, сайт всезнай">
    <title>Title</title>
    <link rel="stylesheet" href="src/css/godot/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0; /* Удалите или измените это свойство для разрешения прокрутки */
        }
        .MainMenuContent {
            color: #ffffff;
            font-family:  "Montserrat", sans-serif;
            display: inline;
            text-decoration: none;
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 100vh; /* Установите высоту в 100% viewport */
            overflow: hidden; /* Скрывает любой контент, выходящий за пределы контейнера */
        }
        #imgBackground {
            border-radius: 0;
            border: 0;
            width: 100%;
            height: 100%; /* Установите высоту в 100% */
            object-fit: cover; /* Заполняет контейнер, сохраняя пропорции */
            filter: brightness(70%);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0; /* Поместите изображение за содержимым */
        }
        #content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            z-index: 1; /* Убедитесь, что текст находится над изображением */
        }
        .MainMenuContent {
            opacity: 0; /* Начальное состояние невидимо */
            transform: translateY(-20px); /* Сдвигаем элементы вверх */
            animation: fadeInUp 1s ease-out forwards; /* Анимация */
        }
        /*анимация */
        #content p {
            animation-delay: 2s;
        }
        #content a:nth-of-type(1) {
            animation-delay: 4s;
        }
        #content a:nth-of-type(2) {
            animation-delay: 6s;
        }
        #content a:nth-of-type(3) {
            animation-delay: 8s;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        #MainVideo {
            width: 100%;
            height: 100%;
        }
        #pVideo {
            display: block;
            position: absolute;
            top: 110%;
            right: 20px;
        }

        nav.navbar {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 2;
            backdrop-filter: blur(3px);
            background-color: rgb(134 144 154 / 15%);
            box-shadow: none;
            margin-bottom: -70px;

        }
        .container-xxl {
            margin-left:0 ;
        }

        .navbar-collapse {
            display: flex; /* Используйте Flexbox */
            justify-content: center; /* Центрирование элементов по горизонтали */
            align-items: center; /* Центрирование элементов по вертикали */
            gap: 15px; /* Расстояние между элементами, можно настроить по необходимости */
        }

        .navbar-collapse a {
            color: #ffffff; /* Цвет текста */
            text-decoration: none; /* Убирает подчеркивание у ссылок */
        }

        /* Опционально: можно добавить стили для активных ссылок */
        .navbar-collapse a.active {
            font-weight: bold; /* Например, выделить активную ссылку */
        }
        .navbar-collapse a:hover, #content > a.MainMenuContent:hover {
            text-decoration: underline;
        }
        .navbar-toggler-icon {
            background-image: url("src/images/MenuButton/buttonMenu.png");
        }
        .navbar-toggler, .navbar-toggler:focus {
            outline: none ; /* Убирает стандартный контур при фокусе */
            box-shadow: none ; /* Убирает тень вокруг кнопки */
            border: none ; /* Убирает возможную рамку */
        }





    </style>
</head>
<body>
<!-- Image and text -->
<nav class="navbar navbar-expand-lg ">
    <div class="container-xxl theme little-dark">

        <a class=" MainMenu navbar-brand" href="#">
            <img style="width: 104px; height: 36px;" src="src/ico/iconW.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!---->
        </div>
        <div style="color: #ffffff" class="collapse navbar-collapse" id="navbarSupportedContent">
        <a id="btnMain" class=" MainMenu nav-link active" aria-current="page" href="index_new_to_PC.php">Главная</a>
        <a id="btnMaterial" class=" MainMenu nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
           aria-controls="offcanvasExample">Материал</a>
            <!--профиль-->
            <a  class=" MainMenu nav-link position-relative profile" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Профиль</a>
        </div>
    </div>

</nav>

<div>
    <div class="image-container">
    <img id="imgBackground" src="src/images/jpeg/neon-motherboard-background.jpg" alt="Background Image">
    <div id="content" style="display: grid; justify-content: center; align-content: center;">
        <h3 class="MainMenuContent">Не хотите пройти курс?</h3>
        <a class="MainMenuContent" href="index_new_to_PC.php">Курс для новичков</a>
        <a class="MainMenuContent" href="index_pro_to_PC.php">Курс web-разработчикам</a>
        <a class="MainMenuContent" href="#">Курс по Godot</a>
    </div>
</div>
<div>
    <div>
    <video id="MainVideo" src="src/video/1107906_1080p_4k_1920x1080%20(online-video-cutter.com).mp4" autoplay muted loop></video>
    <p id="pVideo">text video</p>
    </div>
</div>


</div>






















<div class="offcanvas offcanvas-end" style="background-color: #F5F5F5" tabindex="-1"
     id="offcanvasRight"
     aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Закрыть"></button>
    </div>
    <div style="text-align: start" class="offcanvas-body">
        <!---->
        <!-- Login form -->
        <div id="divLogin" <?php if (isset($_SESSION['user_id'])) echo 'style="display: none;"';?>>
        <form action="login.php" method="POST">
            <input name="login" type="text" placeholder="Login" required readonly onfocus="this.removeAttribute('readonly');">
            <input name="password" type="password" placeholder="Password" required readonly onfocus="this.removeAttribute('readonly');">
            <input type="submit" value="Login" required readonly onfocus="this.removeAttribute('readonly');">
        </form>
    </div>
    <br>
    <!-- Registration form -->
    <div id="divRegistration" <?php if (isset($_SESSION['user_id'])) echo 'style="display: none;"';?>>

    <form action="registration.php" method="POST">
        <input name="reg_name" type="text" placeholder="Name" required readonly onfocus="this.removeAttribute('readonly');">
        <input name="reg_login" type="text" placeholder="Login" required readonly onfocus="this.removeAttribute('readonly');">
        <input name="reg_password" type="password" placeholder="Password" required readonly onfocus="this.removeAttribute('readonly');">
        <input type="submit" value="Register">
    </form>
</div>
<!-- Profile -->
<div class="form-profile row g-3" id="divProfile" <?php  if (!isset($_SESSION['user_id'])) echo 'style="display: none; "';?>>
<div class="col-md-8">
    <p>ID: </p>

    <p id="id">
        <?php  if (isset($_SESSION['user_id'])) echo $_SESSION['user_id']; ?>
    </p>
</div>
<div class="col-md-8">
    <p>Name: </p>
    <p id="name">
        <?php if (isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?>
    </p>
</div>
<div class="col-md-8">
    <p>mail: </p>
    <p id="mail">
        <?php if (isset($_SESSION['user_mail'])) echo $_SESSION['user_mail']; ?>
    </p>
</div>
<div class="col-md-8">
    <p>progress: </p>
    <p id="progress">
        <?php if (isset($_SESSION['user_progress'])) echo $_SESSION['user_progress']; ?>
    </p>
</div>
</div>
<button id="changingformsToLogin">Войти</button>
<button id="changingformsToRegister">Зарегистрироваться</button>
<?php if (isset($_SESSION['user_id'])) echo '<button id="changingformsToProfile">Профиль</button>'; ?>
</div>


<!---->
</div>
</div>
<!--material-->
<div class="offcanvas offcanvas-start offcanvas-right" style="background-color: #F5F5F5" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Материал</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
    </div>
    <div class="offcanvas-body" style="overflow: hidden;">
        <!--прогресбар-->
        <div>
            <h6 class="text-center">Прогресс по материалу:</h6>
            <div class="progress" role="progressbar" aria-label="Пример информации"
                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1.4em">
                <div class="progress-bar-animated progress-bar-striped bg-dark"
                     style="width: <?php if (isset($_SESSION['user_progress'])) echo $_SESSION['user_progress']. '%';?>">
                </div>
            </div>
        </div>
        <hr>
        <div class="material-body-scroll">
            <div class="list-lessons">

            </div>
        </div><!---->
</body>
</html>
