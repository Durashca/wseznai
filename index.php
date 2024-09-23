<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Первые шаги освоения ПК</title>
    <meta name="keywords" content="Wseznai, всезнай, все знай, сайт для чайников, как решить те или иные проблемы на пк, wsepropc, регистрация, пароль">
    <meta name="description"
          content="Сайт Все Знай отличный помощник для тех кто решил изучить такую сложную технику как ПК.">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="canonical" href="http://t99662dp.beget.tech/index.php">
<style>
    .mini {
        margin: 0 !important;
        padding: 1px !important;
        border-radius: 3px !important;
    }
</style>
</head>
<body>


<!--меню-->
<section>
    <div class="container-xxl">
        <div class="container text-left text">
            <div class="row">
                <div class="container-material">
                    <h1 class="text-center">Главная</h1>
                    <p>Добро пожаловать на сайт ВсеЗнай! Здесь вы можете найти кучу полезного и понятного материала по использованию ПК как для новичков, так и для профи.</p>
                    <ul>
                        <h4>Рекомендации:</h4>
                        <li>Прочтите от начала до конца весь материал по теме и только потом приступайте к заданию.</li>
                        <li>Не отчаивайтесь, если что-то не получается.</li>
                        <li>На моем сайте есть карточки, которые показывают состояние текста.
                            От <span class="bd-callout bd-callout-green mini">зеленого</span>, <span class="bd-callout bd-callout-warning mini">желтого</span>, <span class="bd-callout bd-callout-red mini">красного</span> - степень важных моментов. <span class="bd-callout bd-callout-info mini">Синий</span> - дополнительная информация. <span class="bd-callout bd-callout-violet mini">Фиолетовый</span> - информация о задании для телефонов.</li>
                        <li>В конце урока будут задания, они будут <span>в прерывистых рамочках.</span></li>
                        <li>Вы всегда можете вернуться к уроку. Нажмите на кнопку <b>материал</b>, на верхней панели.</li>
                    </ul>

                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center; margin: 1% 0;">
            <button type="button"
                    class="btn btn-outline-success">
                <a class="nav-link active" href="the_memo.php">Начнем обучение</a>
            </button>
        </div>
    </div>
</section>

<?php
include 'src/php/additionally.php';
?>


</body>
</html>
