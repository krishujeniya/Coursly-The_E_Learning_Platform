<?php include('assets/includes/config.php'); 
echo '
      <main class="justify-content-center">
  <div class="container bg-secondary m-5">
      <h2 class="mt-5">Registration Form</h2>
      ';
      if (isset($_SESSION['login_error2'])) {
        echo '<div class="error-message container-fluid text-center text-dark">' . $_SESSION['login_error2'] . '</div>';
        unset($_SESSION['login_error2']);
      }
  echo '
  <form action="authenticationPage.php" method="POST">
  <div class="m-3">
    <label for="register-username" class="form-label">Username:</label>
    <input type="text" id="register-username" name="register_username" minlength="2" class="form-control" required placeholder="e.g. johnsmith123">
  </div>
  <div class="m-3">
    <label for="register-DOB" class="form-label">Date of Birth:</label>
    <input type="text" id="register-DOB" name="register_DOB" pattern="\d{2}-\d{2}-\d{4}" class="form-control" required placeholder="e.g. 01-01-1990">
    <span id="register-DOB-error" class="error"></span>
  </div>
  <div class="m-3">
    <label for="register-email" class="form-label">Email:</label>
    <input type="email" id="register-email" name="register_email" class="form-control" required placeholder="e.g. example@example.com">
  </div>
  <div class="m-3">
    <label for="register-password" class="form-label">Password:</label>
    <input type="password" id="register-password" name="register_password" minlength="8" class="form-control" required placeholder="e.g. MyPassword123">
  </div>
  <div class="m-3">
    <input type="submit" value="Register" class="btn btn-primary btn-fullscreen">
  </div>
  <div>
    <a href="loginPage.php" id="reg" class="btn btn-secondary btn-fullscreen">Have an account?</a>
  </div>
</form>
<hr>

    </div>

            </main></body></html>


            ';?>