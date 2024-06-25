<?php
session_start();

$servername = 'localhost';
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];
  $sql = "SELECT * FROM r_users WHERE email = '$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $row["email"];
    $_SESSION['username'] = $row["username"];
  } else {
    session_unset();
  }
}



function printtest($conn,$questions, $answers, $options,$achievement, $recipientName,$issuedDate,$course,$email)
{

    $total_questions = count($questions);
    $score = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_answers = $_POST['answers'];

        foreach ($user_answers as $index => $user_answer) {
            $correct_answer = $answers[$index];

            if (strtolower(trim($user_answer)) == $correct_answer) {
                $score++;
            }
        }
    }

    echo '
        <h1 class="mt-4 mb-4">Quiz</h1>';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

      if ($score >= 5) {
        echo '<h5>Congratulations!</h5>
        <p>Your score: ' . $score . ' out of 10 </p>';
        echo '<a href="certificatePage.php?course='.$achievement.'&name='. $recipientName.'&date='.$issuedDate.'" class="btn btn-primary btn-fullscreen my-3">Go to certificate</a>';
        $aa="Exam".$course;
        $sql11 = "UPDATE r_certificates SET $course = 'true' WHERE username = '$email';";
        $sql12 = "UPDATE r_certificates SET $aa = '$issuedDate' WHERE username = '$email';";
        $re = $conn->query($sql11);
        $re = $conn->query($sql12);
        
    } else {
        echo '<h5>Required Score: 5!</h5>
        <p>Your score: ' . $score . ' out of 10</p>';
        echo '<a class="btn btn-primary btn-fullscreen my-3" href="videoPage.php?course='.$course.'">Re-Test</a>';
    }
    
    } else {
        echo '
            <form method="post" action="#">
                <ol>';

        $question_indexes = array_rand($questions, 10); 

        foreach ($question_indexes as $index) {
            $question = $questions[$index];
            $question_options = $options[$index];

            echo "<li>$question<br>";

            foreach ($question_options as $option) {
                echo "<label>$option</label><br>";
            }

            echo "<input type='text' name='answers[$index]' class='form-control'><br>";
            echo "</li><br>";
        }

        echo '
                </ol>
                <input type="submit" value="Submit" class="btn btn-primary btn-fullscreen my-3">
            </form>';
    }
}

          

echo '
<!DOCTYPE html>
<html>

<head>
  <meta name="title" content="Coursly e-learning platform">
  <meta name="description" content="Coursly is a comprehensive e-learning platform offering a wide range of online courses for learning success. Start your educational journey today!">
   <meta name="keywords" content="Online courses, E-learning platform, Online education, Learning management system, Distance learning, Virtual classrooms, Online certifications, Skill development courses, Professional training, Online tutorials, Educational resources, Interactive learning, Personalized learning, Online workshops, Video lectures, Web-based learning, Online test preparation, Continuing education, Career advancement courses, Self-paced learning, Digital learning, Mobile learning, Online course marketplace, Affordable online education, Industry-specific courses, Online learning community, Online degree programs, Expert-led courses, Flexible learning options">

  <title>Coursly e-Learning Platform | Online Courses for Learning Success</title>
  <link href="assets/bs/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="assets/img/logo1.png" type="image/png">
  <link rel="stylesheet" href="assets/bs/main.css">
  <!-- Google Tag Manager -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7R0YHLW6YM"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag("js", new Date());

    gtag("config", "G-7R0YHLW6YM");
  </script>
  <!-- End Google Tag Manager -->
</head>
<body class="bg-dark text-white">

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-black">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo1.png" alt="" width="100">
      </a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto">
          
          <li class="nav-item">
          ';
          if (isset($_SESSION['username'])) {
                echo '<a href="loginPage.php" class="nav-link" ">' . $_SESSION['username'] . '</a>';
              } else {
                echo '<a href="loginPage.php" class="nav-link" ">Guest</a>';
              }
echo '          </li>

<li class="nav-item">
<a href="index.php" class="nav-link">Home</a>
</li>
<li class="nav-item">
<a href="aboutPage.php" class="nav-link">About Us</a>
</li>
        </ul>
      </div>
    </div>
  </nav>

';

?>
