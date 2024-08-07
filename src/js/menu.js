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
                <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                           aria-controls="offcanvasExample">Материал</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight">Профиль</a>
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
