// src/js/sertificate.js
  // Увеличение первых букв имени и фамилии
  const modifiedUserName =    localStorage.getItem('userName').charAt(0).toUpperCase() + localStorage.getItem('userName').slice(1);
  const modifiedUserSurname = localStorage.getItem('userSurname').charAt(0).toUpperCase() +localStorage.getItem('userSurname').slice(1);

  const currentDate = new Date();
  const day = String(currentDate.getDate()).padStart(2, '0');
  const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // Добавляем нуль перед месяцем, если он однозначный
  const year = currentDate.getFullYear();
  const currentDateString = `${day}.${month}.${year}`;

  window.addEventListener('DOMContentLoaded', function () {
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

          ctx.font = 'italic 25px Roboto, sans-serif';


  /*        document.getElementById('certificateContainer').style.display = 'block';*/
      };

      img.src = 'src/images/garbage/scr.png'; // Путь к фоновому изображению
  });

  function downloadCertificate() {
      const canvas = document.getElementById('canvas');
      const a = document.createElement('a');
      a.href = canvas.toDataURL('image/png');
      a.download = 'certificate.png';
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

  