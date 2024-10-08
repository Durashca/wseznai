document.addEventListener('DOMContentLoaded', function() {
    let head = document.querySelector('head');

    // Добавляем мета-теги
    const metaTags = document.createElement('meta');
    metaTags.name = 'viewport';
    metaTags.content = 'width=device-width, initial-scale=1.0';
    head.appendChild(metaTags);

    // Добавляем favicon
    const faviconLink = document.createElement('link');
    faviconLink.rel = 'icon';
    faviconLink.href = '/favicon.png'; // замените на свой favicon
    head.appendChild(faviconLink);

    // Добавляем CSS-файлы
    const cssFiles = [
        'src/css/OfflineBootstrapCss.css',
        'src/css/loading_the_wheel.css',
        'src/css/indentation.css',
        'src/css/bootstrap.css',
        'src/css/material.css',
        'src/css/container_material.css',
        'src/css/material/hotkeys/alignment.css',
        'src/css/material/screenshots/alignment.css',
        'src/css/img.css',
        'src/css/menu.css',
        'src/css/advertisement.css'
    ];

    cssFiles.forEach((cssFile) => {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = cssFile;
        head.appendChild(link);
    });

    // Добавляем JavaScript-файлы
    const jsFiles = [
        'src/js/navbar_creator.js',
        'src/js/OfflineBootstrapJs.js',
        'src/js/material.js',
        'src/js/material_settings.js',
        'src/js/footer.js'
    ];

    jsFiles.forEach((jsFile) => {
        const script = document.createElement('script');
        script.src = jsFile;
        script.async = true; // или script.defer = true;
        document.body.appendChild(script);
    });
});
