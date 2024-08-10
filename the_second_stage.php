<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .pattern {
        border: 2px solid black;
        }
    </style>
</head>
<body>
<div class="container-xxl">
    <div class="container text-left text">
        <div class="row">
            <div class="container-material">

                <!---->
                <content>
                <p> шаблоны:</p>
                <div id="templates">

                </div>

                </content>
            </div>
        </div>
    </div>
</div>
<script>
    let templates = document.getElementById('templates');

if (!templates) {
    console.error("Элемент с id 'templates' не найден");
}

function createTemplate(imgWebsiteHref, imgDbHref, explanationText, downloadLinkHref, actionForm, inputHiddenValue) {
    if (!imgWebsiteHref ||!imgDbHref ||!explanationText ||!downloadLinkHref ||!actionForm ||!inputHiddenValue) {
        console.error("Не все обязательные аргументы переданы");
        return;
    }

    let pattern = document.createElement('div');
    pattern.classList.add('pattern');

    let imgWebsite = document.createElement('img');
    imgWebsite.src = imgWebsiteHref;
    imgWebsite.classList.add('website');

    let imgDb = document.createElement('img');
    imgDb.src = imgDbHref;
    imgDb.classList.add('db');

    let explanation = document.createElement('p');
    explanation.textContent = explanationText;

    let downloadLink = document.createElement('a');
    downloadLink.href = downloadLinkHref;
    downloadLink.textContent = 'Скачать';

    let form = document.createElement('form');
    form.action = actionForm;
    let button = document.createElement('input');
    button.name = 'button';
    button.value = 'коменты';
    button.type = 'ubmit';
    let inputHidden = document.createElement('input');
    inputHidden.type = 'hidden';
    inputHidden.value = inputHiddenValue;
    form.appendChild(button);
    form.appendChild(inputHidden);

    pattern.appendChild(imgWebsite);
    pattern.appendChild(imgDb);
    pattern.appendChild(explanation);
    pattern.appendChild(downloadLink);
    pattern.appendChild(form);

    if (templates) {
        templates.appendChild(pattern);
    }
}

createTemplate("src/image/ww.png", 'rc/image/ss.png', 'text explanation', 'downloadLinkHref', 'actionForm', 'inputHiddenValue');
createTemplate("src/image/ww.png", 'rc/image/ss.png', 'text explanation', 'downloadLinkHref', 'actionForm', 'inputHiddenValue');
</script>
</body>
</html>