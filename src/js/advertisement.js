<!--    зона рекламы-->
// Получаем элемент кнопки
const createPageButton = document.getElementById('advertisement');

addEventListener('DOMContentLoaded', function () {
// Вставляем HTML-разметку после кнопки
    createPageButton.insertAdjacentHTML('afterend', `
  <div class="row" style="display: flex; justify-content: space-between;">
  
  
    <div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Попробуй себя в сфере IT</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>

   <div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img_9.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Начни на Python</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>

   <div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img_8.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Аренда помещений для конференции</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>

   <div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img_2.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Быстрые и надежные серверы</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>


<div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img_3.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Серверы в аренду</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>

<div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img_4.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Серверы Intel Xeon</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>

<div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img_5.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Сервер для сайта</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>

<div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="src/images/advertisement/img_6.png" class="img-fluid " alt="...">
    </div>
    <div class="col-md-5">
      <div class="card_content">
      <h5 class="card-title">Изучение Python</h5>
        <p class="card-url"></p>
       </div>
        
        <button style="width: 90px;" class="btn btn-outline-success">Перейти</button>
      
    </div>
  </div>
</div>

  
</div>
`);
})
