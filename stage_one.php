<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#1</title>
</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">

                <!---->
                <content>
                <h1 class="title text-center">Запуск php</h1>
                <p>php - это сервеный язык и с ним не все так просто 
                как с html, css и js. Раз это серверный язык, то для него нужен хостинг ( это что-то частички от сервера, пока не задумываетесь).
                Ну раз выяснили что нужно( подсказка: хостинг), остается только один вопрос: где взять хостинг? Купить конечно же.
                Но этот вариант не подходит новичкам так как они только еще учаться по этому приходит на помощь локальный сервер.
                Я знаю всего 3 локальных сервера это: MAMP, OpenServer, XAMMP.
                каждый из них подходит под определенную операциионную системую. MAMP под ios и windows, OpenServer под windows, а XAMMP под Linux.
                 Про все рассказывать не буду для этого есть 
                <b>
                <span style="color:blue;">G</span><span style="color:red;">o</span>
                <span style="color:gold;">o</span><span style="color:blue;">g</span> 
                <span style="color:green;">l</span><span style="color:red;">e</span>.
                </b>
                </p>
                Расскажу только про MAMP ибо он подходит как  для mac, так и для windows. 

                <p>
                <a href="https://www.mamp.info/en/downloads/">
                Cсылка на их сайт</a>, там найдете свою операциионную систему и скачаете MAMP
                </p>
                <p>Когда установите то будет вам доступно вот такое окошко</p>
                <img src="src/images/stage/image.png">
                <p>Переключите на старт. Все сервер запущен, теперь создадим файл index.php. Для этого откроем проводник. 
                Найдем папку с MAMP, далее htdocs и здесть мы можем создать наш index.php.</p>
                <img src="src/images/stage/image2.png">
                <img src="src/images/stage/image3.png">
                <p>Правой кнопкой мыши по файлу index.php и выберит <b>открыть c помощью</b> <b>блокнот</b>.</p>
                <p> код для проверки: </p>
<!--  -->
                <pre>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang=&quot;en&quot;&gt;
                    &lt;head&gt;
                        &lt;meta charset=&quot;UTF-8&quot;&gt;
                        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
                        &lt;title&gt;#3&lt;/title&gt;
                    &lt;/head&gt;
                     &lt;body&gt;
                         &lt;h1&gt;Работа с php&lt;/h1&gt;
                     &lt;/body&gt;
                    &lt;/html&gt;

                </pre>
                <p>Всавьте код и нажмите ctrl s.</p>
                <p>Теперь перейдите в браузер и в поисковой строке напишите http://localhost/ , далее прописываем путь к index.php
                     (можно его и не прописывать так как браузер автоматически находит файлы с именем index).</p>
                <p>В итоге: http://localhost/index.php или http://localhost/ . Эти ссылки отобразят наш php.</p>
                <p>Можно создать папку или папки и в них уже разместить файл (пример): http://localhost/WseZnai/test/index.php .</p>

                <div style="display: flex; justify-content: center; margin: 1% 0;">
                    <button type="button" class="btn btn-outline-success">
                        <a class="nav-link active" href="stage_two.php">Сл. страница</a>
                    </button>
                </div>
                <!--  -->
                </content>
            </div>
        </div>
    </div>
</div>
<?php
include 'src/php/additionally.php';
?>
<script src="src/js/stage.js"></script>
</body>
</html>