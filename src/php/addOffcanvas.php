    <!-- left offcanvas -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Фон с прокруткой</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
    </div>
   <!-- content left offcanvas -->
  
    <div class="offcanvas-body">
    <div id="lessonContent">
      
      </div>
  
    </div>
   <!-- content left offcanvas -->
  
  
  </div>
    </div>
    <!-- left offcanvas -->
  
    <!-- right offcanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas справа</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
    </div>
    <!-- content right offcanvas -->
    <div class="offcanvas-body">
         <!-- Login form -->
         <div id="divLogin">
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
        <div id="divRegistration">
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
        <div class="form-profile row g-3 hide" id="divProfile">
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
        </div>
        <!-- End of profile -->
    <!-- content right offcanvas -->
  </div>
    <!-- right offcanvas -->
     <script>
      divProfile = document.getElementById('divProfile');
      divProfile.style.display = 'flex';
     </script>
     