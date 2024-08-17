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
                каждый из них подходит под определенную операциионную системую.
                <p>Не много заумного.</p>
                <div class="bd-callout  bd-callout-info">
                Порты в компьютерных сетях - это специальные номера, которые используются для идентификации конкретного процесса или сервиса,
                работающего на компьютере или сервере. 
                Порты - это 16-битные номера, которые варьируются от 0 до 65535.
                Примеры портов
                <p>Некоторые распространенные порты:</p>
                <ul>
                <li>HTTP: порт 80 (по умолчанию) - используется для доступа к веб-сайтам.</li>
                <li>HTTPS: порт 443 (по умолчанию) - используется для доступа к веб-сайтам с шифрованием.</li>
                <li>FTP: порт 21 (по умолчанию) - используется для передачи файлов по протоколу FTP.</li>
                <li>SSH: порт 22 (по умолчанию) - используется для удаленного доступа к компьютеру или серверу по протоколу SSH.</li>
                <li>MySQL: порт 3306 (по умолчанию) - используется для доступа к базе данных MySQL.</li>
                </ul>
                <p> Так как это defalt значения не обязательно их прописыватью в поисковой строчке браузера.</p>

                
                
                </div>

                
                <p>Расскажу немножко про каждого:</p>
                
                <h4>MAMP</h4>
                <p>
                <a href="https://www.mamp.info/en/downloads/">
                Cсылка на их сайт</a>, там найдете свою операциионную систему и скачаете MAMP
                </p>
                <p>Во время установки можете не выбирать mamp pro.</p>
                <p>Когда установите то будет вам доступно вот такое окошко.</p>
                <img src="src/images/stage/image.png">
                <p>Переключите на старт. Все сервер запущен (вы увидите как включились две зеленые точки).</p>
                <div class="bd-callout bd-callout-warning">
                    Если вам вылезает ошибка, это может быть связано с тем что порт 80 уже чем то занят, например skype.
                    В окошке нажмите mamp -> references перейдите в ports и поменяйте с 80 и 3306 на другое нажмите ок. 
                    Только вам прийдется после localhost: писать свой новый порт например http://localhost:81/index.php 
                </div>
                <p>Теперь создадим файл index.php . Для этого откроем проводник. 
                Найдем папку с MAMP, далее htdocs и здесть мы можем создать наш index.php</p>
                <img src="src/images/stage/image2.png">
                <p>Или создадим папку (например test) и в здесь создайте файл index.php</p>
                <img src="src/images/stage/image3.png">
                <p>Правой кнопкой мыши по файлу index.php и выберите <b>открыть c помощью</b> -> <b>блокнот</b>.</p>
                <div class="code">
                <p> код для index.php: </p>
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;#3&lt;/title&gt;
&lt;/head&gt;
 &lt;body&gt;
     &lt;h1&gt;Работа с php на MAMP&lt;/h1&gt;
 &lt;/body&gt;
&lt;/html&gt;

                </pre>
                </div>
                
                <p>Всавьте код и нажмите ctrl s.</p>
                <p>Теперь перейдите в браузер и в поисковой строке напишите http://localhost/   , далее прописываем путь к index.php
                     (можно его и не прописывать так как браузер автоматически находит файлы с именем index).</p>
                <p>В итоге: http://localhost/index.php или http://localhost/ . Эти ссылки отобразят наш php.</p>
                <p>Если вы создали папку и в нее занесли свой проект то вам подойдет: http://localhost/test/index.php</p>


                <h4>XAMMP</h4>
                <p>Скачиваем с официального сайта (<a href="https://www.apachefriends.org/ru/download.html">ссылка на сайт</a>).</p>
                <p>Устанавливаем.</p>
                <p>Далее открываем наше приложение. Включаем apache и MySQL.</p>
                <img src="src/images/stage/image5.png">
                <p>Переходим в браузер и пишем http://localhost/ </p>
                <img src="src/images/stage/image8.png">
                <p>Здесь нажмите phpMyAdmin, чтоб он открылся в другой вкладке (он дальше пригодится) или чтоб открыть phpMyAdmin
                 зайдите в xammp и напротив где mySQL нажмите admin.</p>
                <p>Далее откроейте проводник зайдите в папку с XAMMP -> htdocs.</p>
                <img src="src/images/stage/image4.png">
                <p>Cоздадим папку ( например: MyProject) и в ней index.php</p>
                <img src="src/images/stage/image9.png">
                <p>Заносим код</p>
                
                <div class="code">
                <p> код для index.php: </p>
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;#3&lt;/title&gt;
&lt;/head&gt;
 &lt;body&gt;
     &lt;h1&gt;Работа с php на XAMMP&lt;/h1&gt;
 &lt;/body&gt;
&lt;/html&gt;

                </pre>
                </div>
                <p>Перезагружаем страницу браузера.</p>
                <img src="src/images/stage/image6.png">

                <h4>OpenServer</h4>
                <p>Скачиваем с официального <a href="https://ospanel.io/download/">сайта</a>. Если выбрать бесплатную установку,
                то процесс скачивания будет долгим.</p>
                <img src="src/images/stage/image7.png">
                <p>Устанавливаем (во время установки вам будет предложены 3 варианта: полная установка, компактная установка, 
                    выборочная, если вы совсем ничего не понимаете то выберите компактную установку, а если вы уже знакомы с php то берите полную).</p>
                <p>Как только установка завершена и вы перезапустили ПК, находим ярлык и открываем open server , снизу справо будет его иконка</p>
                <img src="src/images/stage/image10.png">
                <p>В модулях выбираем php версию допустим 8.1 и включаем ее и в модулюх найдите MySQL и включите последнюю версию. Как только все
                сделали перезапустите open server. Потом переходим в example.local и выбираем открыть в браузере.</p>
                <img src="src/images/stage/image11.png">
                <p>Если что-то пошло не так и в браузере пишется нет подключения то:перезагрузите open server это делается в его ментю, cмените с https://example.local/ на http://example.local/ ,
                если это подействовало то проблема в сертификате нажмите пкм по ярлыку open server свойства -> расположение файла, найдите сертификат
                и кликните по нему чтоб установить. И тогда можете использовать  https://example.local/ </p>
                <img src="src/images/stage/image12.png">
                <p>Зайдите в конревой каталог.</p>
                <img src="src/images/stage/image10.png">
                <p>Вместо htdocs здесь нажимаем home, здесь все проекты.</p>
                <p>Создаем папку с окончанием .local.</p>
                <img src="src/images/stage/image13.png">
                <p>В этой папке создаем папке .osp и в этой папке создаем  файл project.ini c именем нашей папки.</p>
                <img src="src/images/stage/image14.png">
                <p>Перезагружаем open server и видим что появился наш проект.</p>
                <img src="src/images/stage/image14.png">
                <p>Заходим в нашу папку через меню и создаем файл index.php </p>
                <img src="src/images/stage/image15.png">
                <div class="code">
                <p> код для index.php: </p>
                <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;title&gt;#3&lt;/title&gt;
&lt;/head&gt;
 &lt;body&gt;
     &lt;h1&gt;Работа с php на OpenServer &lt;/h1&gt;
 &lt;/body&gt;
&lt;/html&gt;

                </pre>         
                </div>
                <p>Сохраняем и переходим через меню в браузер.</p>
                <img src="src/images/stage/image15.png">
                <img src="src/images/stage/image12.png">
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
include 'src/php/canceling_the_button.php';
?>
>
 <style>
        h4 {
        margin-top: 5%;
        }   
        div.code {
            margin-top: 3px;
            border:  2px solid slategrey;
            border-radius: 1rem;
            padding-left: 10px;
            padding-top: 10px;
        }
        
    </style>   

</body>
</html>