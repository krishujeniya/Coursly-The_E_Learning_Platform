<?php 
include('assets/includes/config.php');
$name = $_GET['name'];
$date = $_GET['date'];
$course = $_GET['course'];
echo '<main class="justify-content-center">
    <div class="container">
    <div class="certificate text-black bg-white">
        <div class="text-center">
            <img src="assets/img/logo2.png" style="max-width: 200px; height: auto;" alt="Logo" class="img-fluid">
        </div>

        <h3 class="text-center recipient-name">
            '.$name.'
        </h3>
        <p class="description m-3">is hereby awarded this certificate of achievement for the successful completion<br>
            of <b>'.$course.'</b> certification exam on <b>'.$date.'</b></p>
        <div class="signatures">
           
            
            <div class="signature">
                <img height =5px src="assets/img/28s.png" alt="Signature 2" class="img-fluid"><p>
                Mr.Krish Ujeniya <br>CEO of Coursly</p>
            </div>
            <div class="signature">
                <img src="assets/img/38sign.png" alt="Signature 3" class="img-fluid">
                <p>Mr.Zeel Makwana<br>President of Coursly</p>
            </div>
        </div>
    </div>
    <div class="buttons-container">
                <button onclick="window.print()" class="btn btn-primary m-5">Print</button>
        <a href="index.php" class="btn btn-secondary m-5">Back</a>
    </div></div></main>
      
</body>
</html>';
