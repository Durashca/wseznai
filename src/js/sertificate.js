// src/js/sertificate.js
function saveUserData(event) {
    event.preventDefault(); // предотвращаем стандартное поведение формы

    const name = document.getElementById('name').value;
    const surname = document.getElementById('surname').value;

    localStorage.setItem('userName', name);
    localStorage.setItem('userSurname', surname);

    // Здесь можно автоматически переходить к следующему шагу или отображать сертификат.
    // Например, вы можете вызвать функцию, чтобы обновить сертификат.
    updateCertificate();
}

function updateCertificate() {
    const modifiedUserName = localStorage.getItem('userName').charAt(0).toUpperCase() + localStorage.getItem('userName').slice(1);
    const modifiedUserSurname = localStorage.getItem('userSurname').charAt(0).toUpperCase() + localStorage.getItem('userSurname').slice(1);

    // Отрисовка сертификата на холсте
    const currentDate = new Date();
    const day = String(currentDate.getDate()).padStart(2, '0');
    const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Добавляем нуль перед месяцем, если он однозначный
    const year = currentDate.getFullYear();
    const currentDateString = `${day}.${month}.${year}`;

    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    const img = new Image();
    img.onload = function () {
        canvas.width = img.width;
        canvas.height = img.height;

        ctx.drawImage(img, 0, 0);

        ctx.font = 'italic 25px Roboto, sans-serif';
        ctx.fillText(currentDateString, 220, 505); // Рисуем текущую дату на холсте в указанной позиции

        ctx.font = 'italic bold 30px Roboto, sans-serif';
        ctx.fillStyle = '#000';

        const userText = ` ${modifiedUserSurname} ${modifiedUserName} `;
        const userTextWidth = ctx.measureText(userText).width;
        const userTextX = (canvas.width - userTextWidth) / 2; // Центрирование текста на горизонтальной оси
        const userTextY = 285; // Позиция текста по вертикали

        ctx.fillText(userText, userTextX, userTextY);
    };

    img.src = 'src/images/garbage/certificate1.png'; // Путь к фоновому изображению
}

function downloadCertificate(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение формы

    const canvas = document.getElementById('canvas');
    const a = document.createElement('a');
    a.href = canvas.toDataURL('image/png');
    a.download = 'certificate1.png';
    a.click();
}

  let lesson_arr = document.querySelectorAll('a.btn.btn-primary.lesson');
  window.onload = function () {
      for (let i = 1; i < lesson_arr.length; i++) {
          lesson_arr[i].classList.remove('disabled')
          lesson_arr[i].disabled = false;
      }
  }

  document.addEventListener('DOMContentLoaded', function() {
          let userProgress = Array(10).fill(true); // Устанавливаем все уроки как завершенные
          localStorage.setItem('userProgress', JSON.stringify(userProgress));
          
  });

  