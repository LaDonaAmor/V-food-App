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
    <title>V-food App
    </title>
  </head>
  <body>
    <!--Hero-Image-->
    <div class="hero-image">
      <div class="hero-text">
        <div class="box b" data-aos="zoom-in">
          <img src="assets/svg/logo.svg" class="image-fluid hero-logo">
          <h1 class="h-text">Pick your ingredient, cook and get your favorite food delivered hot & fresh 
          </h1>
          <p class="p-text">
            quality Just As You Want It
          </p>
          <div data-aos="zoom-in-down">
            <button>Coming Soon
            </button>
          </div>
        </div>
      </div>
    </div>
    <img src="assets/svg/Group 41.svg" class="logo2">
    <!--How It Works-->
    <div class="work">
      <img src="assets/svg/Work.svg" class="work-image">
      <h1 class="how">How It Works
      </h1>
      </br>
    <p class="how2">
      Sign Up or Login In to your App.
      Select your ingredent, proportion them, select your food cooking duration and start cooking.
      The App has a list of all close-by restaurants for you to choose from. 
      Done cooking?
      Place an order and proceed to payment which covers the cost of ingredients used and delivery charges. 
      Have diet to follow? or health issue?
      Include it during your sign up and V-food App will detect the ingredients harmful for each ailment one has 
      and suggest an alternative.
    </p>
    </div>
  <div class="container">
    <div data-aos="fade-down-right">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <img class="card-img-top" src="assets/svg/cheese (1) 1.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Pick Ingredients & proportion
              </h5>
              <p class="card-text">
                The 
              </p>
            </div>
          </div>         
        </div>
        <div class="col-sm">
          <div class="card">
            <img class="card-img-top" src="assets/svg/click (1) 1.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Choose Location & delivery time
              </h5>
              <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. 
                Lorem Ipsum has been the ind ustry's standard dummy text ever since the 1500s,
              </p>           
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <img class="card-img-top" src="assets/svg/shipment 1.svg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fast Deliveries 
              </h5>
              <p class="card-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. 
                Lorem Ipsum has been the ind ustry's standard dummy text ever since the 1500s,
              </p>         
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Stay In Touch-->
  <h1 class="stay1">STAY IN TOUCH TO GET NOTIFIED ONCE WE LAUNCH
  </h1>
  </br>
<p class="stay2">Coupon Codes & Insider Tips to get the Best out of our Products
</p>
<div class="Subscribe">
  <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <input type="email" class="email" id="email" placeholder="Enter Email Address" name="email">
    </div>
    <button>Subscribe
    </button>
  </form>
</div>
<!--About The App-->
<div class="about">
  <div class="row">
    <div class="col about-texts"> 
      <h5 class="about-title">About The App
      </h5>
      <p class="about-text">
        Our special Vitual-food App is a virtual and Augmented Technological Restaurant 
        app that allows you to cook virtually anywhere at anytime without visiting the restaurant 
        but by selecting the ingredients you need at the proportion you desire. 
        The app has a list of all close-by restaurants for you to choose from. 
        After cooking you place an order and proceed to payments which covers the ingredients used
        and delivery charges. 
        This app is useful in a situation where you already run out of food stuff and need to cook, 
        you can easily open the app and get the cooking done virtually then you get your food order. 
        V-food App detects the ingredients harmful for each ailment one has and suggest an alternative.
      </p>
    </div>
    <div class="col">
      <div data-aos="zoom-in-left">
        <img src="assets/img/Group 28.png" class="image">
      </div>
    </div>
  </div>
</div>
</div>
<!--Delivery-->
<section class="deliver">
  <h1 class="deliver-title">Delivery
    </br>Get free and fast delivery with our app
  </h1>
<p class="deliver-text">We deliver from 9:00am to 6:00pm. 
  You will recieve your food 60 minuite after ordering.
</p>
<div class="app">
  <a href="#">
    <img src="assets/svg/Group 9.svg">
  </a>
  <a href="#">
    <img src="assets/svg/Group 10.svg" class="pl-5">
  </a>
</div>
</section>
<!--Footerish-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
</script>
<script>  AOS.init();
</script>
</body>
</html>
