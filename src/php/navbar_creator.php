<!-- src\php\navbar_creator.php -->
 <script>
    menu = `
<header id="h-space" class="text-center">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="--bs-navbar-padding-y: 0rem; z-index: 10">
        <div class="container-xxl theme little-dark" style="min-height: 50px; box-shadow: 1px 2px 10px grey; text-align: justify">
            <a class="navbar-brand" href="#">ВсеЗнай</a>
            <!--тайная кнопка-->
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--профиль-->
                <button class="btn position-relative profile" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <img class="profile" src="src/images/garbage/user_profile.png"  alt="профиль">

                </button>
                <!---->
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index_new_to_PC.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a id="btnMaterial" class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                           aria-controls="offcanvasExample">Материал</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
`;

document.body.insertAdjacentHTML('afterbegin', menu);
let btnMaterial =  document.getElementById('btnMaterial');
console.log(btnMaterial);



</script>
    <!--панель справа-->
    <div class="offcanvas offcanvas-end" style="background-color: #F5F5F5" tabindex="-1"
         id="offcanvasRight"
         aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    aria-label="Закрыть"></button>
        </div>
    <div style="text-align: start" class="offcanvas-body">
            <!---->
                <!-- Login form -->
        <div id="divLogin" <?php if (isset($_SESSION['user_id'])) echo 'style="display: none;"';?>>
        <?php
        session_start();
        ?>
         <form action="login.php" method="POST">
            <input name="login" type="text" placeholder="Login" required readonly onfocus="this.removeAttribute('readonly');">
            <input name="password" type="password" placeholder="Password" required readonly onfocus="this.removeAttribute('readonly');">
            <input type="submit" value="Login" required readonly onfocus="this.removeAttribute('readonly');">
         </form>
      </div>
        <br>
        <!-- Registration form -->
        <div id="divRegistration" <?php if (isset($_SESSION['user_id'])) echo 'style="display: none;"';?>>
        <?php
        session_start();
        ?>
        <form action="registration.php" method="POST">
            <input name="reg_name" type="text" placeholder="Name" required readonly onfocus="this.removeAttribute('readonly');">
            <input name="reg_login" type="text" placeholder="Login" required readonly onfocus="this.removeAttribute('readonly');">
            <input name="reg_password" type="password" placeholder="Password" required readonly onfocus="this.removeAttribute('readonly');">
            <input type="submit" value="Register">
        </form>
      </div>
        <!-- Profile -->
        <div class="form-profile row g-3" id="divProfile" <?php if (!isset($_SESSION['user_id'])) echo 'style="display: none; "';?>>
        <div class="col-md-8">
            <p>ID: </p>
            <?php
        session_start();
        ?>
            <p id="id">
              <?php if (isset($_SESSION['user_id'])) echo $_SESSION['user_id']; ?>
            </p>
        </div>
        <div class="col-md-8">
            <p>Name: </p>
            <p id="name">
              <?php if (isset($_SESSION['user_name'])) echo $_SESSION['user_name']; ?>
            </p>
        </div>
        <div class="col-md-8">
            <p>mail: </p>
            <p id="mail">
              <?php if (isset($_SESSION['user_mail'])) echo $_SESSION['user_mail']; ?>
            </p>
        </div>
        <div class="col-md-8">
            <p>progress: </p>
            <p id="progress">
              <?php if (isset($_SESSION['user_progress'])) echo $_SESSION['user_progress']; ?>
            </p>
        </div>
      </div> 
      <button id="changingformsToLogin">Войти</button>
      <button id="changingformsToRegister">Зарегистрироваться</button>
      <?php if (isset($_SESSION['user_id'])) echo '<button id="changingformsToProfile">Профиль</button>'; ?>
    </div>  
      

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
                   <div class="progress-bar-animated progress-bar-striped bg-dark"
                    style="width: <?php session_start(); if (isset($_SESSION['user_progress'])) echo $_SESSION['user_progress']. '%';?>">
                   </div>
                </div>
            </div>
            <hr>
            <div class="material-body-scroll">
                <div class="list-lessons">

                </div>
    </div><!---->

<!-- переключение форм -->
<script>
changingformsToLogin = document.getElementById('changingformsToLogin');
changingformsToRegister = document.getElementById('changingformsToRegister');
changingformsToProfile = document.getElementById('changingformsToProfile');

changingformsToLogin.addEventListener('click', function() {
    document.getElementById('divRegistration').style.display = 'none';
    document.getElementById('divLogin').style.display = 'block';
    document.getElementById('divProfile').style.display = 'none';
    changingformsToLogin.style.display = 'none';
    changingformsToRegister.style.display = 'block';
    changingformsToProfile.display = 'block';
});

changingformsToRegister.addEventListener('click', function() {
    document.getElementById('divLogin').style.display = 'none';
    document.getElementById('divRegistration').style.display = 'block';
    document.getElementById('divProfile').style.display = 'none';
    changingformsToRegister.style.display = 'none';
    changingformsToLogin.style.display = 'block';
    changingformsToProfile.style.display = 'block';
});

changingformsToProfile.addEventListener('click', function() {
    document.getElementById('divLogin').style.display = 'none';
    document.getElementById('divRegistration').style.display = 'none';
    document.getElementById('divProfile').style.display = 'block';
    changingformsToProfile.style.display = 'none';
    changingformsToLogin.style.display = 'block';
    changingformsToRegister.style.display = 'block';
});
</script>
<!--  -->




