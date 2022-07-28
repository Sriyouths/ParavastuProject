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
        <div class="container">
                <div id="homeContent">
                    <h1>Choose Your Recipies</h1>
                    <ul class="recipies">
                    <!-- calling a function Show recipies in Js file passing argument as r1 -->
                        <li class="recipe" id="recipe1" onclick="showRecipies('r1')" >
                            <img src="images/res1.jpg" alt="Recipe 1" title="Recipe 1" />
                        </li>
                    <!-- calling a function Show recipies in Js file passing argument as r2 -->
                        <li class="recipe" id="recipe2" onclick="showRecipies('r2')">
                            <img src="images/res2.jpg" alt="Recipe 1" title="Recipe 2" />
                        </li>
                    <!-- calling a function Show recipies in Js file passing argument as r3 -->
                        <li class="recipe" id="recipe3" onclick="showRecipies('r3')">
                            <img src="images/res3.jpg" alt="Recipe 1" title="Recipe 3" />
                        </li>
                    <!-- calling a function Show recipies in Js file passing argument as r4 -->
                        <li class="recipe" id="recipe4" onclick="showRecipies('r4')">
                            <img src="images/res4.jpg" alt="Recipe 1" title="Recipe 4" />
                        </li>
                    </ul>

                    <div class="showRecipies">
                        <div class="recipeData" id="r1">
                            <h2>Ingredients</h2>
                            <ul class="ingradients">
                                <li>Fresh ginger</li>
                                <li>Salt</li>
                                <li>Potatos</li>
                                <li>Spices</li>
                                <li>Turmeric</li>
                            </ul>

                            <h2>making</h2>
                            <p class="making">
                                Pound chicken until even, place in a large resealable bag,Whisk olive oil, lemon, garlic and spices. Pour marinade over chicken.Marinade in refrigerator 2 � 8 hours.Preheat a grill over medium-high heat.Grill chicken until cooked through, about 4 minutes per side.
                            </p>
                        </div>
                        <div class="recipeData" id="r2">
                            <h2>Ingredients</h2>
                            <ul class="ingradients">
                                <li>Oil</li>
                                <li>Fresh cilantro</li>
                                <li>Potatos</li>
                                <li>Spices</li>
                                <li>Turmeric</li>
                            </ul>

                            <h2>making</h2>
                            <p class="making">
                                Chop chicken breasts into bite-size pieces In a large bowl, combine chicken, buttermilk, and ranch packet, and refrigerate for 2 hours In a large ziplock bag, crumble the cheese crackers into desired crumbs (to replace bread crumbs) Place cracker crumbs into a medium bowl and coat each piece of chicken until fully covered Heat oil to 350°F/175°C and fry chicken until crackers turn golden brown (3 minutes). Place on a paper towel to dry Enjoy with a side of ranch or any sauce!
                            </p>
                        </div>
                        <div class="recipeData" id="r3">
                            <h2>Ingredients</h2>
                            <ul class="ingradients">
                                <li>Oil</li>
                                <li>Salt</li>
                                <li>Potatos</li>
                                <li>Spices</li>
                                <li>Turmeric</li>
                            </ul>

                            <h2>Making</h2>
                            <p class="making">
                                Simmer chicken in sauce until cooked through.Add cornstarch slurry during last minute to thicken sauce.Stir in cream.
                            </p>
                        </div>
                        <div class="recipeData" id="r4">
                            <h2>Ingredients</h2>
                            <ul class="ingradients">
                                <li>Minced garlic</li>
                                <li>Olive oil</li>
                                <li>Turmeric</li>
                                <li>Fennel seeds</li>
                                <li>Greek yogurt</li>
                            </ul>

                            <h2>Making</h2>
                            <p class="making">
                                Mix spices together,Saute onion, garlic and ginger in a skillet.Add broth and tomatoes, simmer.Blend mixture in a blender as directed then return to skillet.Season sauce then add chicken.</p>
                        </div>
                    </div>
                </div>
        </div>
    </body>
    </html>