<?php include('assets/includes/config.php'); 
echo '
      <main class="justify-content-center">
    <div class="container bg-secondary m-5">
      ';
    if (isset($_SESSION['username'])) {
      echo '<h2 class="m-3 my-5">Welcome, ' . $_SESSION['username'] . ' !</h2>';
      echo '<h4 class="m-3">Date of Birth : ' . $_SESSION['DOB'] . '</h4>';
      echo '<h4 class="m-3">Email Id     : ' . $_SESSION['email'] . '</h4>';
      echo '<a href="logoutPage.php" class="btn btn-primary btn-fullscreen my-3">Logout</a><br>';
      echo "<hr>";
    } else {
      echo '<h2 class="mt-5">Login Form</h2>';

      if (isset($_SESSION['login_error'])) {
        echo '<div class="error-message container-fluid text-center text-dark">' . $_SESSION['login_error'] . '</div>';
        unset($_SESSION['login_error']);
      }

      echo '<form action="authenticationPage.php" method="POST">
        <div class="m-3">
          <label for="login-email" class="form-label">Email Id:</label>
          <input type="email" id="login-email" placeholder="e.g. example@example.com"placeholder="e.g. example@example.com" name="login_email" class="form-control" required>
        </div>
        <div class="m-3">
          <label for="login-password" class="form-label">Password:</label>
          <input type="password"  id="login-password" placeholder="e.g. MyPassword123" name="login_password" class="form-control" required>
        </div>
        <div class="m-3">
          <input type="submit" value="Login" class="btn btn-primary btn-fullscreen">
        </div>
        <div>
          <a href="registrationPage.php"  id="reg" class="btn btn-secondary btn-fullscreen">Create New Account?</a>
        </div>
      </form>';

      echo "<hr>";
    }
    echo '
    </div></body><html>


    ';?>