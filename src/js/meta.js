  // Obtener el elemento head
  const head = document.querySelector('head');

  // язык
  const html = document.querySelector('html');
  html.setAttribute('lang', 'ru');

  // кодировка
  const metaCharset = document.createElement('meta');
  metaCharset.setAttribute('charset', 'UTF-8');
  // адаптация под мобильные устройства
  const metaViewport = document.createElement('meta');
  metaViewport.setAttribute('name', 'viewport');
  metaViewport.setAttribute('content', 'width=device-width, initial-scale=1.0');
  // запрет кеширования
  const metaCacheControl = document.createElement('meta');
  metaCacheControl.setAttribute('http-equiv', 'Cache-Control');
  metaCacheControl.setAttribute('content', 'no-cache, no-store, must-revalidate');
  // запрет кеширования
  const metaPragma = document.createElement('meta');
  metaPragma.setAttribute('http-equiv', 'Pragma');
  metaPragma.setAttribute('content', 'no-cache');
  // запрет кеширования
  const metaExpires = document.createElement('meta');
  metaExpires.setAttribute('http-equiv', 'Expires');
  metaExpires.setAttribute('content', '0');
  // иконка
  const linkIcon = document.createElement('link');
  linkIcon.setAttribute('rel', 'icon');
  linkIcon.setAttribute('type', 'image/png');
  linkIcon.setAttribute('href', 'src/ico/icon (1).png');
  // css bootsrap
  const linkBootstrap = document.createElement('link');
  linkBootstrap.setAttribute('href', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
  linkBootstrap.setAttribute('rel', 'stylesheet');
  linkBootstrap.setAttribute('integrity', 'sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH');
  linkBootstrap.setAttribute('crossorigin', 'anonymous');
  // js bootsrap
  const jsBootstrap = document.createElement('script');
  jsBootstrap.setAttribute('src', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
  jsBootstrap.setAttribute('integrity', 'sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz');
  jsBootstrap.setAttribute('crossorigin', 'anonymous');
  // свои css
  const myCss = document.createElement('link');
  myCss.setAttribute('href', 'src/css/css.css');
  myCss.setAttribute('rel', 'stylesheet');


  
  // добавка всего
  head.appendChild(metaCharset);
  head.appendChild(metaViewport);
  head.appendChild(metaCacheControl);
  head.appendChild(metaPragma);
  head.appendChild(metaExpires);
  head.appendChild(linkIcon);
  head.appendChild(linkBootstrap);
  head.appendChild(myCss);
  head.appendChild(jsBootstrap);
  
  