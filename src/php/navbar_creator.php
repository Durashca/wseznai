<script>
    menu = `
<header id="h-space" class="text-center">
    <nav class="navbar navbar-expand-lg  fixed-top" style="--bs-navbar-padding-y: 0rem; z-index: 10; box-shadow: 1px 2px 10px grey; --bs-bg-opacity: 1;">
        <div class="container-xxl theme little-dark" style="min-height: 50px;  text-align: justify">
            <h3  style="font-family: 'Montserrat', sans-serif;font-weight: bold;margin-bottom:0"><span >ВсеЗнай</span></h3>
            <!--тайная кнопка-->

            <div>
                <button style="border: 0px;box-shadow: 0 0 0 0;" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Переключатель навигации">
                    <span style="filter: invert(1);  " class="navbar-toggler-icon"></span>
                </button>
                <!--профиль-->

                <!---->
            </div>
            <div style="flex-grow: 0; " class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!--<div style="border: 1px solid red; display: flex">-->
                    <li class="nav-item">
                        <a id="btnMain" class="" aria-current="page" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a  id="btnMaterial" class="" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                           aria-controls="offcanvasExample">Материал</a>
                    </li>
                    <!--                       -->
                    <li class="nav-item">
                        <a data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                        class="" aria-current="page" href="#">Профиль</a>
                    </li>
<!--</div>-->
                    <!---->
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
                <div class=" inputs container text-left">
                    <div class="col">
                        <div >
                            <label for="regName" class="form-label">Введите свою почту</label>
                            <input  name="login" type="email" placeholder="Введите почту" autocomplete="email"  required readonly onfocus="this.removeAttribute('readonly');" id="loginInput">
                            <label for="regName" class="form-label">Введите свой пароль</label>
                            <input id="PasswordLogin" name="password" type="password" placeholder="Введите пароль" autocomplete="current-password" required readonly onfocus="this.removeAttribute('readonly');">
                        </div>
                    </div>
                    <div class="bottom_form col">
                    <input  class="btn btn-outline-success" type="submit" value="Войти" required readonly onfocus="this.removeAttribute('readonly');" id="loginButton" disabled>
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
                <div style="" class=" inputs container text-left">
                    <div class="col">
                        <div>
                        <label for="regName" class="form-label">Введите свое имя</label>
                        <input style="" id="regName" name="reg_name" type="text" placeholder=" Введите имя" required readonly onfocus="this.removeAttribute('readonly');">

                        <label for="regInput" class="form-label">Придумайте свою почту</label>
                        <input  id="regInput" name="reg_login" type="email" placeholder=" Придумайте почту" required readonly onfocus="this.removeAttribute('readonly');">

                        <label for="regPassword" class="form-label">Придумайте свой пароль</label>
                        <input  id="regPassword" name="reg_password" type="password" placeholder="Придумайте пароль" required readonly onfocus="this.removeAttribute('readonly');">

                        <label for="reg_age" class="form-label">Введите свой год рождения</label>
                        <input  type="date" id="reg_age" name="reg_age" min="1903-12-31" max="2020-12-31" >


                    </div>
                 </div>
                 <div class="bottom_form col">
                     <input   id="regButton"  class="btn btn-outline-success" type="submit"
                            value="Создать аккаунт" disabled>
                 </div>
              </div>





                <script>
                    let nameInputReg = document.getElementById('regName');
                    document.getElementById('regName').addEventListener('input', validateForm);
                    document.getElementById('regInput').addEventListener('input', validateForm);
                    document.getElementById('regPassword').addEventListener('input', validateForm);

                    nameInputReg.addEventListener('blur', function () {

                            // почта по умолчанию
                            const input = document.getElementById('regInput');
                            input.value = nameInputReg.value + '.' + generateRandomString(10) + (getRandom5050() ? '@yandex.ru' : '@mail.ru');

                            // пароль по умолчанию
                            document.getElementById('regPassword').value = generateRandomString(10)


                    });

                    // генератор 50/50
                    function getRandom5050() {
                        return Math.round(Math.random());
                    }
                    // генератор 50/50

                    //генератор пароля

                    function generateRandomString(length = 16) {
                        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                        const randomArray = new Uint8Array(length);

                        window.crypto.getRandomValues(randomArray);

                        return Array.from(randomArray, (char) => chars[char % chars.length]).join('');
                    }
                    //генератор пароля

                    document.getElementById('reg_age').addEventListener('input', validateForm);



                    function validateForm() {
                        const name = document.getElementById('regName').value.trim();
                        const email = document.getElementById('regInput').value.trim();
                        const password = document.getElementById('regPassword').value;
                        const age = document.getElementById('reg_age');

                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        const passwordRegex = /^[A-Za-z0-9]{6,}$/; // Пароль должен содержать хотя бы 6 символов

                        if (name === '' || !emailRegex.test(email) || password === '' || age.value === '') {
                            document.getElementById('regButton').disabled = true;
                        } else if (!passwordRegex.test(password)) {
                            document.getElementById('regButton').disabled = true;
                        } else {
                            document.getElementById('regButton').disabled = false;
                            document.getElementById('changingformsToLogin').disabled = true;
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

        <div style="display: grid; margin-top: 2% ">
            <button style="margin-bottom: 4%;" class="btn btn-outline-success" id="changingformsToLogin">Уже были здесь (войти)</button>
            <button class="btn btn-outline-success" id="changingformsToRegister">Первый раз на сайте (зарегистрироваться)</button>
        </div>



        <button style="" class="btn btn-outline-success" id="changingformsToProfile">Профиль</button>
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
    </div>
</div>


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


            // default
            if ( document.getElementById('id').textContent.trim()!== "" ) {
                document.getElementById('divLogin').style.display = 'none';
                document.getElementById('divRegistration').style.display = 'none';
                document.getElementById('divProfile').style.display = 'block';
                 document.getElementById('changingformsToProfile').style.display = 'none';
                document.getElementById('changingformsToLogin').style.display = 'block';
                 document.getElementById('changingformsToRegister').style.display = 'block';
                // console.log("ya")

            }else {
                // console.log("!!")
            }

        </script>

