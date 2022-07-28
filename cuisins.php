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
  
        <script src="js/custom.js"></script>
    </head>
    <body onload="showContent()">
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
        <div class="container">
              <select class="cuisins" id="selectCuisin"  multiple="">
                <option class="list-item" value="indian" onclick="getCuisinId(this)" >Indian</option>
                <option class="list-item" value="mexian" onclick="getCuisinId(this)">Mexican</option>
                <option class="list-item" value="korian" onclick="getCuisinId(this)">Korean</option>
                <option class="list-item" value="chinees" onclick="getCuisinId(this)">Chinese</option>
              </select>
              <div id="displayCuisin">
                    <div class="item-desc" id="default">
                        <h1>Cusins</h1>
                        <p>Please select your favorite cuisin from the list...</p>
                    </div>
                    <div class="item-desc" id="indian">
                        <h1>Indian</h1>
                        <p>Spicy, rich, flavourful and diverse are terms that are frequently used to describe Indian food. ... Due to the differences in climate and soil conditions, the local cuisines in various regions may vary greatly from each other, as each region uses spices, herbs and ingredients that are grown locally</p>
                    </div>
                    <div class="item-desc" id="mexian">
                        <h1>Mexican</h1>
                        <p>Mexican food has a reputation for being very spicy, but it has a wide range of flavors and while many spices are used for cooking, not all are spicy. Many dishes also have subtle flavors. Chiles are indigenous to Mexico and their use dates back thousands of years.</p>
                    </div>
                    <div class="item-desc" id="korian">
                        <h1>Korean</h1>
                        <p>Korean food is some of the healthiest on earth, with an emphasis on vegetables, meats cooked simply and without much oil, and a near obsession with the fermented vegetable kimchi, which can be something of an acquired taste for non-Koreans.</p>
                    </div>
                    <div class="item-desc" id="chinees">
                        <h1>Chinese</h1>
                        <p>Chinese food, rich and colorful, has diversified color, aromatic flavor, and excellent taste as its main features. With these three characteristics, it is not only tasty but also a work of art for people to appreciate.</p>
                    </div>
              </div>
        </div>
    </body>
    </html>