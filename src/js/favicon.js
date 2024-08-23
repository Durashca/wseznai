// Создаем элемент <link>
var link = document.createElement('link');
link.rel = 'icon';
link.type = 'image/png';
link.sizes = '32x32';
link.href = 'src/ico/miniIconW.png';  // Путь к вашей иконке

// Добавляем элемент <link> в <head>
document.head.appendChild(link);
