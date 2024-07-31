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
         <form method="POST">
            <input name="login" type="text" placeholder="Login" required autocomplete="off">
            <input name="password" type="password" placeholder="Password" required autocomplete="off">
            <input type="submit" value="Login" required autocomplete="off">
         </form>
          </div>
        <br>
        <!-- Registration form -->
        <div id="divRegistration">
        <form method="POST">
            <input name="reg_name" type="text" placeholder="Name" required autocomplete="off">
            <input name="reg_login" type="text" placeholder="Login" required autocomplete="off">
            <input name="reg_password" type="password" placeholder="Password" required autocomplete="off">
            <input type="submit" value="Register">
        </form>
        </div>
        <!-- Profile -->
          <div id="divProfile">
       <p>ID: </p><p id="id"><?php if (isset($_SESSION['user_id'])) echo $_SESSION['user_id']; ?></p>
       <p>Name: </p><p id="name"><?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?></p>
       <p>Login: </p><p id="login"><?php if (isset($_SESSION['user_login'])) echo $_SESSION['user_login']; ?></p>
          </div>
        <!-- End of profile -->
  
    <!-- content right offcanvas -->
    </div>
    <!-- right offcanvas -->
     <script>
      divProfile = document.getElementById('divProfile');
      divProfile.style.display = 'flex';
     </script>