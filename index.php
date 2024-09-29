<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <title>Сайт ВсеЗнай - поможет сделать первые шаги в освоении ПК</title>
    <meta name="keywords" content="Wseznai, всезнай, все знай, сайт для чайников, как решить те или иные проблемы на пк, wsepropc">
    <meta name="description" content="Сайт Все Знай - отличный помощник для тех, кто решил изучить такую сложную технику, как ПК.
    На этом сайте мы разберем 10 ключевых аспектов работы с ПК. Вконце всех заданий вас ждет сертификат.">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="canonical" href="http://t99662dp.beget.tech/index.php">

    <meta property="og:title" content="Сайт ВсеЗнай - поможет сделать первые шаги в освоении ПК" />
    <meta property="og:description" content="Сайт Все Знай - ваш помощник в освоении ПК." />
    <meta property="og:image" content="https://example.com/path/to/your/image.png" /> <!-- Замените на корректный URL изображения -->
    <meta property="og:url" content="http://t99662dp.beget.tech/index.php" />
    <meta property="og:type" content="website" />
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
                    <p>Добро пожаловать на сайт ВсеЗнай! Здесь вы можете найти много полезного и понятного материала по использованию ПК как для новичков, так и для профи.</p>
                    <ul>
                        <li>Рекомендации:</li>
                        <li>Прочтите от начала до конца весь материал по теме и только потом приступайте к заданию.</li>
                        <li>Не отчаивайтесь, если что-то не получается.</li>
                        <li>На моем сайте есть карточки, которые показывают состояние текста. От <span class="bd-callout bd-callout-green mini">зеленого</span>, <span class="bd-callout bd-callout-warning mini">желтого</span>, <span class="bd-callout bd-callout-red mini">красного</span> - степень важных моментов. <span class="bd-callout bd-callout-info mini">Синий</span> - дополнительная информация. <span class="bd-callout bd-callout-orange mini">Оранжевый</span> - инструкция по выполнению задания для вашего устройства.</li>
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
