<?php
$servername="localhost";
$username="root";
$password="";
$dbname="company";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          
          <span class="nav-item">DashBoard</span>
        </li><br><br>
        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
           <li><a href="">
          <i class="fas fa-users" ></i>
          <span class="nav-item">My Student</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">All Projects</span>
        </a></li>
        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Courses</h1>
        
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fab fa-app-store-ios"></i>
          <h3>Bachelor Of Computer Application</h3>
          <p>Number Of Projects:</p>
          <?php
          
          $java = "select * from records where department='BCA'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
          <a href="course.php">
          <button style="width: 100px; height: 40px;">View</button></a>
        </div>
        <div class="card">
          <i class="fab fa-app-store-ios"></i>
          <h3>MSc.Information Technology</h3>
          <p>Number Of Projects</p>
          <?php
          
          $java = "select * from records where department='BCA'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
          <button>View</button>
        </div>
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>BSc. Computer Science</h3>
          <p>Number Of Projects</p>
          <?php
          
          $java = "select * from records where department='BCA'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
          <button>View</button>
        </div>
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>Msc. Computer Science</h3>
          <p>Number Of Students</p>
          <?php
          
          $java = "select * from records where department='BCA'";
          $java_run = mysqli_query($conn,$java);

          if($java_total = mysqli_num_rows($java_run))
          {
            echo '<h2 class="mb-0">'.$java_total.'</h2>';

          }else{
            echo '<h2 class="mb-0">No Data</h2>';
          }

          ?>
          <button>View</button>
        </div>
      </div>

      
    </section>
  </div>
</body>
</html>
