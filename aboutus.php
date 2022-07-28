<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Restaruant Finder</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        
        <!-- All css here -->
        <link rel="stylesheet" href="css/style.css">
        <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: none;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
    </head>
    <body>
        <header>
            <div class="logo" id="logo">Restaruant<i>Finder</i></div>
            <nav> 
                <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="cuisins.php">Cuisine </a></li>
                     <li><a href="findYourRestaurant.php ">Find Your Restaurant</a></li>
                     <li><a href="cashIt.php">Cash It</a></li>
                     <li><a href="diy.php">DIY's</a></li>
                     <li><a href="kyd.php ">Know Your Diet </a></li>
                     <li><a href="careIt.php">Care It with COVID</a></li>
                     <li><a href="aboutUs.php ">About US</a></li>
                </ul>
            </nav>
        </header>
     <div class="about-section">
  <h1>About Us</h1>
  <p>Group 10-Internet for the Enterprise - CIS 5610.</p>
  <p>As part of final project we have implemented a website for choosing a best restaruant</p>
</div>

<h2 style="text-align:center">Our Core Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <center><img src="images/Murali.jpg" alt="Murali" height="300" width="200"></center>
      <div class="container">
        <h2 style="text-align:center;color:White;">Murali Krishna Jonna</h2>
        <p style="text-align:center;color:White;">Design,Development,Database connections</p>
        <p style="text-align:center;color:DodgerBlue;">mxj74270@ucmo.edu</p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <center><img src="images/sriyouth.jpeg" alt="Mike" height="300" width="250"></center>
      <div class="container">
        <h2 style="text-align:center;color:White;" >Sriyouth Sena Goud Panjala</h2>
        <p style="text-align:center;color:White;">Implemented Cashit functionality and HTML</p>
        <p style="text-align:center;color:DodgerBlue;">sxp32270@ucmo.edu</p>
        
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <center><img src="images/vivek.jpeg" alt="John" height="300" width="250"></center>
      <div class="container">
        <h2 style="text-align:center;color:White;">Vivekananda Reddy Kotla</h2>
        <p style="text-align:center;color:White;">Implemented DIY's functionality and HTML</p>
        <p style="text-align:center;color:DodgerBlue;">vxk56091@ucmo.edu</p>
        
        
      </div>
    </div>
  </div>
</div>
    </body>
    </html>