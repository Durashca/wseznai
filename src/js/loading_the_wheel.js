window.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.display = 'flex';
    } else {
        console.log("Элемент с id 'loader' не найден");
    }
});

window.addEventListener('load', function() {
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.display = 'none';
    } else {
        console.log("Элемент с id 'loader' не найден");
    }
});