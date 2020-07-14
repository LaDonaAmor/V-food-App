<?php
$email="";
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $conn=new mysqli("localhost","root","","mydata");
    $cmd="INSERT into subscribe value('$email');";
    if(mysqli_query($conn, $cmd))
    {
        echo "Subscribed";
    }
    else{
        echo "Not Save";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-4.5.0-dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>V-food App</title>
</head>
<body>
  <!--Hero-Image-->
    <div class="hero-image">
        <div class="hero-text">
          <div class="box b" data-aos="zoom-in">
          <img src="assets/svg/logo.svg" class="image-fluid hero-logo">
          <h1 class="h-text">Pick your ingredient and get your favorite food delivered hot & fresh </h1>
          <p class="p-text">Healthy neat chefs do all the prep work, like peeding, choping & cutting, so you can cook a fresh food </p>
          <button>Coming Soon</button>
        </div>
      </div>
      </div>
      <div class="work">

        
      </div>

      
      <form method="POST" class="form">
        Email: <input type="email" name="email"></br>
        <input type="submit" name="submit">
    </form>

      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>  AOS.init();</script>
</body>
</html>
