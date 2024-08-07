<script>
let menu = 
`
<div class="container-fluid">
      <nav style="margin: 0 0 4% 0;" id="menu" class="navbar navbar-expand-lg bg-body-tertiary">
          <img  id="idIcoMenu" src="src/ico/icon.png">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Материал</a>
              </li>
              <li class="nav-item ">
               <a class="nav-link active" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Профиль</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
              <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
          </div>
      </nav>
      </div>
`;
document.body.insertAdjacentHTML('afterbegin', menu);
</script>


<!-- left offcanvas -->
<!--material-->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Материал</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
          </div>
          <div class="offcanvas-body" style="overflow: hidden;">
            <!--прогресбар-->
            <div>
                <h6 class="text-center">Прогресс по материалу:</h6>
                <div class="progress" role="progressbar" aria-label="Пример информации"
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1.4em">
                    <div id="progress_bar" class="progress-bar-animated progress-bar-striped bg-dark"
                        style="width: 0">
                    </div>
                </div>
            </div>
            <hr>
            <div class="material-body-scroll">
                <div class="list-lessons">

                </div>
            </div>
</div>
            <!---->
    <!-- left offcanvas -->
  
    <!-- right offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="right: 0; left: auto;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas справа</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
    </div>
    <!-- content right offcanvas -->
    <div class="offcanvas-body">
     
        <!-- End of profile -->
    <!-- content right offcanvas -->
</div>
    <!-- right offcanvas -->
     <script>
      divProfile = document.getElementById('divProfile');
      divProfile.style.display = 'flex';
     </script>
     