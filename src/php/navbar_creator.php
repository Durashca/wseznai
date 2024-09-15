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
                        <a id="btnMain" class="nav-link active" aria-current="page" href="index.php">Главная</a>
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
    let btnMain = document.getElementById('btnMain');
    // console.log(btnMaterial);



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
    <div style="
    display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
    " class="offcanvas-body">

        <!---->
        <!-- Login form -->
        <div id="divLogin" style="display: none;">
            <form action="login.php" method="POST">
                <div style="display: flex" class="container text-left">
                    <div class="col-8">
                        <div>
                            <input style="width: 100%; border-radius: 0; border: 0.5px solid gray" name="login" type="email" placeholder="Введите почту" required readonly onfocus="this.removeAttribute('readonly');" id="loginInput">
                            <input style="width: 100%; border-radius: 0; border: 0.5px solid gray" name="password" type="password" placeholder="Введите пароль" required readonly onfocus="this.removeAttribute('readonly');">
                        </div>
                    </div>
                    <div class="col">
                    <input style="height: 100%; width: 100%; border-radius: 0 2px 2px 0; border: 0px" class="btn btn-outline-success" type="submit" placeholder="Войти" required readonly onfocus="this.removeAttribute('readonly');" id="loginButton" disabled>
                    </div>
                </div>
                <script>
                    document.getElementById('loginInput').addEventListener('input', function() {
                        const email = this.value;
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                        if (!emailRegex.test(email)) {
                            document.getElementById('loginButton').disabled = true;
                        } else {
                            document.getElementById('loginButton').disabled = false;
                        }
                    });
                </script>
            </form>
        </div>
        <br>
        <!-- Registration form -->
        <div id="divRegistration" style="display: none;">

            <form action="registration.php" method="POST">
                <div style="display: flex" class="container text-left">
                    <div class="col-8">
                        <div>
                        <input style="width: 100%; border-radius: 0; border: 0.5px solid gray" id="regName" name="reg_name" type="text" placeholder=" Введите имя" required readonly onfocus="this.removeAttribute('readonly');">

                        <input style="width: 100%; border-radius: 0; border: 0.5px solid gray" id="regInput" name="reg_login" type="email" placeholder=" Придумайте почту" required readonly onfocus="this.removeAttribute('readonly');">

                        <input style="width: 100%; border-radius: 0; border: 0.5px solid gray" id="regPassword" name="reg_password" type="password" placeholder="Придумайте пароль" required readonly onfocus="this.removeAttribute('readonly');">

                        <input style="width: 100%; border-radius: 0; border: 0.5px solid gray" type="date" id="data" name="data" value="2008-07-22" min="1903-12-31" max="2020-12-31" >


                    </div>
                 </div>
                 <div class="col">
                     <input style="height: 100%; width: 100%; border-radius: 0 2px 2px 0; border: 0px"  id="regButton"  class="btn btn-outline-success" type="submit"
                            value="Создать" disabled>
                 </div>
              </div>





                <script>
                    document.getElementById('regName').addEventListener('input', validateForm);
                    document.getElementById('regInput').addEventListener('input', validateForm);
                    document.getElementById('regPassword').addEventListener('input', validateForm);

                    function validateForm() {
                        const name = document.getElementById('regName').value.trim();
                        const email = document.getElementById('regInput').value.trim();
                        const password = document.getElementById('regPassword').value;

                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        const passwordRegex = /^[A-Za-z0-9]{6,}$/; // Пароль должен содержать хотя бы 6 символов

                        if (name === '' || !emailRegex.test(email) || password === '') {
                            document.getElementById('regButton').disabled = true;
                        } else if (!passwordRegex.test(password)) {
                            alert('Пароль должен содержать не менее 6 символов');
                            document.getElementById('regButton').disabled = true;
                        } else {
                            document.getElementById('regButton').disabled = false;
                        }
                    }
                </script>
            </form>
        </div>
        <!-- Profile -->
        <div class="form-profile row g-3" id="divProfile" style="display: none;">
            <div class="col-md-8">
                <p>ID: </p>

                <p id="id">
                    <?php  if (isset($_SESSION['user_id'])) echo $_SESSION['user_id']; ?>
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

        <div style="display: grid ">
            <button style="margin-bottom: 4%;" class="btn btn-outline-success" id="changingformsToLogin">Войти</button>
            <button class="btn btn-outline-success" id="changingformsToRegister">Зарегистрироваться</button>
        </div>



        <button style=" margin-top: 90%;" class="btn btn-outline-success" id="changingformsToProfile">Профиль</button>
    </div>


    <!---->
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
                     style="width: <?php if (isset($_SESSION['user_progress'])) echo $_SESSION['user_progress']. '%';?>">
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
                this.style.display = 'none';
                document.getElementById('changingformsToProfile').style.display = 'block';
                document.getElementById('changingformsToRegister').style.display = 'block';
            });

            changingformsToRegister.addEventListener('click', function() {
                document.getElementById('divLogin').style.display = 'none';
                document.getElementById('divRegistration').style.display = 'block';
                document.getElementById('divProfile').style.display = 'none';
                this.style.display = 'none';
                document.getElementById('changingformsToLogin').style.display = 'block';
                document.getElementById('changingformsToProfile').style.display = 'block';
            });

            changingformsToProfile.addEventListener('click', function() {
                document.getElementById('divLogin').style.display = 'none';
                document.getElementById('divRegistration').style.display = 'none';
                document.getElementById('divProfile').style.display = 'block';
                this.style.display = 'none';
                document.getElementById('changingformsToLogin').style.display = 'block';
                document.getElementById('changingformsToRegister').style.display = 'block';
            });
        </script>





