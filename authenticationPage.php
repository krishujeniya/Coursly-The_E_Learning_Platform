 <?php

  include('assets/includes/config.php');
  
    require 'assets/includes/Exception.php';
require 'assets/includes/PHPMailer.php';
require 'assets/includes/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


 function SendOTP($email){
      // Generate a random OTP
$otp = mt_rand(100000, 999999);


// Send the OTP to the user's email
$to = $email;
$subject = "OTP Verification";
$message =  "<br><br><br>
Welcome to Coursly, the ultimate destination for IT enthusiasts seeking comprehensive video courses and certifications. Our platform offers a diverse range of IT-related courses, covering topics such as programming, network security, cloud computing, data analytics, web development, and artificial intelligence. <br><br>

With Coursly, you'll gain access to high-quality video content and engaging lessons created by industry experts. Our courses are designed to provide a seamless learning experience, allowing you to learn at your own pace and acquire in-demand skills. 
<br><br>
Upon completion of a course, you'll receive industry-recognized certificates, bolstering your professional credibility and unlocking exciting career opportunities. Join Coursly today to unleash your IT potential.
<br><br>
Visit our website at https://coursly-the-learning-platform.000webhostapp.com to explore our extensive course catalog and start your learning journey. Should you have any questions or require assistance, our support team is here to help.
<br><br>
Thank you for choosing Coursly.
<br><br>
Best regards,
<br><br>
AI DRAGO Team<br>
<br><br>Your OTP is: " . $otp;

$headers = "From: aidrago0021@gmail.com"; // Replace with your email address




// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;  // Enable verbose debug output (change to DEBUG_SERVER for detailed debug)
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // Replace with your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aidrago0021@gmail.com';  // Replace with your SMTP username
    $mail->Password   = 'khmdxzndfhejgajg';  // Replace with your SMTP password
    $mail->SMTPSecure = 'ssl';  // Enable TLS encryption (or SSL if required)
    $mail->Port       = 465;  // TCP port to connect to

    // Recipients
    $mail->setFrom('aidrago0021@gmail.com', 'Coursly');  // Replace with your email and name
    $mail->addAddress($to);  // Use the user's email address

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    // Send the email
    $mail->send();
    // Store the OTP in session for verification
    $_SESSION['otp'] = $otp;
    // Redirect to OTP verification page
    header("location: otpVerificationPage.php");
    exit();
} catch (Exception $e) {
    echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
}
   
}

  // Login Form
  if (isset($_POST['login_password']) && isset($_POST['login_email'])) {
    $password = md5($_POST['login_password']); 
    $email = $_POST['login_email'];
    $sql = "SELECT * FROM r_users WHERE pass = '$password' AND email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $_SESSION['username'] = $row["username"];
      $_SESSION['email'] = $row['email'];
      $_SESSION['DOB'] = $row['DOB'];

        SendOTP($email);

    } else {
      $message = "Invalid email or password."; 
      $_SESSION['login_error'] = $message;
      header("location: loginPage.php");
      exit();
    }
  }


// Register Form
if (isset($_POST['register_username']) && isset($_POST['register_DOB']) && isset($_POST['register_password']) && isset($_POST['register_email'])) {
    $username = $_POST['register_username'];
    $DOB = $_POST['register_DOB'];
    $password = md5($_POST['register_password']); 
    $email = $_POST['register_email'];

    // Check if the email is already registered
    $checkSql = "SELECT * FROM r_users WHERE email = '$email'";
    $checkResult = $conn->query($checkSql);
    if ($checkResult->num_rows > 0) {
        $message = "This email address is already registered.";
        $_SESSION['login_error2'] = $message; 
        header("location: registrationPage.php");
        exit();
    }

    // Proceed with registration if the email is not registered
    $sql = "INSERT INTO r_users (username, DOB, pass, email) VALUES ('$username', '$DOB', '$password', '$email')";
    $sql22 = "INSERT INTO `r_certificates`(`CID1`, `ExamCID1`, `CID2`, `ExamCID2`, `CID3`, `ExamCID3`, `CID4`, `ExamCID4`, `CID5`, `ExamCID5`, `CID6`, `ExamCID6`, `username`) VALUES ('false','false','false','false','false','false','false','false','false','false','false','false','$email')";

    $result = $conn->query($sql);
    $result = $conn->query($sql22);
    if ($result) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['DOB'] = $DOB;
        SendOTP($email);

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
  ?>