<?php
include('assets/includes/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['otp'])) {
    $userOTP = $_POST['otp'];

    if ($userOTP == $_SESSION['otp']) {
        // OTP verification successful
        // Clear the OTP from session
        unset($_SESSION['otp']);
        
        //Redirect to the desired page, such as the home page or the dashboard.
        header("location: index.php");
        exit();
    } else {
        $message = "Invalid OTP."; 
        $_SESSION['otp_error'] = $message;
        header("location: otpVerificationPage.php");
        exit();
    }
}

echo '

<main class="justify-content-center">
<div class="container bg-secondary m-5">

    <h2>OTP Verification</h2>';
    
    if (isset($_SESSION["otp_error"])) {
        echo '<p>' . $_SESSION["otp_error"] . '</p>';
        unset($_SESSION["otp_error"]);
    }
  echo '  
   <form action="#" method="POST">
  <div class="m-3">
    <label for="otp" class="form-label">Enter OTP:</label>
<input type="text" id="otp" name="otp" pattern=".{6}" class="form-control" required placeholder="Enter OTP" title="Please enter a 6-digit OTP">
  </div>
  <div class="m-3">
    <input type="submit" value="Verify" class="btn btn-primary btn-fullscreen">

  </div>
    <div class="m-3">

       <a href="logoutPage.php" class="btn btn-secondary btn-fullscreen">Back</a>
  </div>

</form>
</div></main>
</body>
</html>

';
?>
