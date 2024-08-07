// распознает усьройство
div = document.getElementById('pre_emptive_letter');
if (window.innerWidth < 768) {
    // телефон
    p = document.createElement('p');
    p.textContent = 'если вы проходите задания с телефона то ссылка на следующую страницу вам открыта';
    div.appendChild(p);
  }else{
   // пк
   div.style.display = 'none';
  }

