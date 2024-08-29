<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
   
    <title>ВсеЗнай</title>
   
</head>
<body>

<!--меню-->
<section>
    <div class="container-xxl">
        <div class="container text-left text">
            <div class="row">
                <div class="container-material">
                    <h1 class="text-center">Главная</h1>
                    <p>Добро пожаловать на сайт ВсёЗнай!
                        Здесь вы можете найти куча полезного и понятного материала по использованию ПК
                        как для новичков, так и для профи.</p>
                    <ul>
                        <h4>Рекомендации:</h4>
                        <li>Прочтите от начала до конца весь материал по теме и только потом приступайте к заданию.</li>
                        <li>Не отчаивайтесь, если что-то не получается.</li>
                        <li>На моем сайте есть карточки, которые показывают состояние текста. От зеленого, желтого,
                            красного - степень важных моментов. Синий - дополнительная информация.
                        </li>
                        <li>По шаговые обьяснение будут в не прерывистых рамочках.</li>
                        <li>В конце урока будут задания, они будут в прерывистых рамочках.</li>
                        <li>Вы всегда можете вернуться к уроку. Нажмите на кнопку <b>материал</b>, на верхней  панели.</li>
                        <li>Не все задания будут доступны на телефонах, поэтому рекомендую проходить задания на моем сайте на ноутбуке или пк.</li>
                    </ul>

                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center; margin: 1% 0;">
            <button  type="button"
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
