const navbarCode =
`
<!--панель справа-->
<div class="offcanvas offcanvas-end" style="background-color: #F5F5F5" tabindex="-1"
     id="offcanvasRight"
     aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Зарегистрироваться</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Закрыть"></button>
    </div>
    <div style="text-align: start" class="offcanvas-body">
        <!--поля ввода-->
        <!--register-->
        <form class="form-profile row g-3 registry" novalidate id="registry_form">
            <div class="col-md-8">
                <label for="name" class="form-label">Имя пользователя</label>
                <input type="text" class="form-control" id="name" placeholder="Ваше имя пользователя" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите имя пользователя.
                </div>
            </div>
            <div class="col-md-8">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="surname" placeholder="Ваша фамилия" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите фамилию.
                </div>
            </div>
            <div class="col-md-8">
                <label for="mail" class="form-label">Почта</label>
                <input type="email" class="form-control" id="mail" placeholder="Ваша почта" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите почту.
                </div>
            </div>
            <div class="col-md-8">
                <label for="pass" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="pass" placeholder="Ваш пароль" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите пароль.
                </div>
            </div>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary" id="registry">Зарегистрироваться</button>
            </div>
       
        </form>
        
        <!--профиль-->
        <form id="user_profile" class="form-profile row g-3 hide">
            <div class="col-md-8">
                <p id="name_profile">Ваше имя:</p>
            </div>
            <div class="col-md-8">
                <p id="surname_profile">Ваша фамилия:</p>
            </div>
            <div class="col-md-8">
                <p id="mail_profile">Ваша почта:</p>
            </div>
            <div class="col-md-8">
                <p id="pass_profile">Ваш пароль</p>
            </div>
            <div class="col-md-8">
                <p id="progress_profile">Ваш прогресс</p>
            </div>
            <div class="col-md-8">
                <!--  <button type="button" class="btn btn-primary" id="update_progress">Обновить прогресс</button>-->
            </div>

            <a>Есть желание покинуть или пройти снова сайт? <a id="exit_profile" href="#">Удалить профиль</a></a>
        </form>
        <!---->
    </div>
</div>
<!--material-->
<div class="offcanvas offcanvas-start offcanvas-right" style="background-color: #F5F5F5" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Материал</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
    </div>
    <div class="offcanvas-body" style="overflow: hidden;">
        <!--прогресбар-->
        <div>
            <h6 class="text-center">Прогресс по материалу:</h6>
            <div class="progress" role="progressbar" aria-label="Пример информации"
                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1.4em">
                <div id="progress_bar" class="progress-bar-animated progress-bar-striped bg-dark"
                    style="width: 0"></div>
            </div>
        </div>
        <hr>
        <div class="material-body-scroll">
            <div class="list-lessons">

            </div>
        </div><!---->
`;
document.body.insertAdjacentHTML('afterbegin', navbarCode);