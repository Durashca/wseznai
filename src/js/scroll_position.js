window.addEventListener('scroll', function() {
    localStorage.setItem('scrollPosition', window.scrollY);
});

// Перемещаемся на сохраненную позицию при обновлении страницы
window.addEventListener('load', function() {
    let scrollPosition = localStorage.getItem('scrollPosition');
    if (scrollPosition) {
        window.scrollTo(0, scrollPosition);
    }
});