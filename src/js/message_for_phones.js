document.addEventListener("DOMContentLoaded", function () {
// распознает устройство
    let pre_emptive_letter = document.getElementById('pre_emptive_letter');
    if (window.innerWidth < 868) {
        // телефон
        // скрыть задание
        document.querySelector('div.keyboard-shortcut-block.dashed').style.display = 'none';
        // текст
        p = document.createElement('p');
        p.textContent = 'если вы проходите задания с телефона то ссылка на следующую страницу вам открыта';
        pre_emptive_letter.appendChild(p);
        //


    } else {
        // пк
        pre_emptive_letter.style.display = 'none';
    }
});
