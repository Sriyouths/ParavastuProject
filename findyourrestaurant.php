<!-- This file been implemented by Murali Krishna Jonna as a Group 10 Project for the subject Internet for Enterprise -->

<!--  Connection details been stored in a seperate file and included-->
<?php include('includes/connection.php'); 
?>
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
        	<!--  Logo of the Restaruant-->
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
                <!--  H1 Tag-->
                    <h1>Find Your Restaurant</h1>
                    <!--  Form based on user selection retrieving data from database-->
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" id="resForm" onsubmit = "event.preventDefault(); getSpiceRestaurants();">
                        <!--  Select Rating level label-->
                        <label for="slevels">Select Rating Level</label><br/>
                        <!--  Option 1 from rating 1 to rating 4-->
                        <input type="radio" name="slevels" value="1to4" style="margin-left: 0;"/> 1 to 4
                        <!--  Option 2 from rating 5 to rating 7-->
                        <input type="radio" name="slevels" value="5to7"  /> 5 to 7
                        <!--  Option 3 from rating more than 7-->
                        <input type="radio" name="slevels" value="morethan7"  /> More than 7
                        <!--  Button to submit form-->
                        <button name="find" value="1" type="submit" id="findYourRestaurants">Get Restaurants</button>
                    </form>
                    <?php
                    //Declaring class
                    class findyourrestaurant {
                           //Function to frame current date
                            function getDate(){
                                //Inbuilt method to generate current date
                                $date = new DateTime("NOW");
                                //returning in a specifc format
                                return $date->format("m-d-Y");;
                            }
                        }
                        
                        ?>
                    <?php
                    //to store Watsapp link , variable declaration
                    $watsapp = '';
                    //to store google maps link , variable declaration
                    $level = '';
    //Upon form submission
    if(!empty($_POST)){
        //Retrieving based on user selection from the form
        $rat = mysqli_real_escape_string($conn, $_POST['slevels']);
        //if the option 1to4
        if($rat =='1to4') {
            $level = '1 AND 4';
        }
        //if the option 5to7
        if($rat =='5to7') {
            $level = '5 AND 7';
        }
        //if the option 7to10
        if($rat =='morethan7') {
            $level = '7 AND 10';
        }
        //SQL Query to retrieve restaruants based on ratings
        $sql = "SELECT * FROM restaurants WHERE rating BETWEEN $level";
        //calling database
        $result = mysqli_query( $conn, $sql );
                            //checking if the database connection is successful with results
                            if (mysqli_num_rows($result) > 0) {
                                //Iterating through the retrieved results
                                while ($row = mysqli_fetch_assoc($result)) {   ?>
                                    <ul class="rest">
                                        <!-- Displaying Name of the restaruant -->
                                        <li><span>Name: </span><?php echo $row['name']; ?></li>
                                        <!-- Displaying image based on the ambience of the restaruant -->
                                        <?php switch ($row['ambience']) {
                                            case 'Awesome':
                                                echo '<li><img src="images/Awesome.jpg" alt="Recipe 1" title="Recipe 1" /></li>';
                                            break;
                                            case 'Excellent':
                                                echo '<li><img src="images/Excellent.jpg" alt="Recipe 1" title="Recipe 1" /></li>';
                                                break;
                                            case 'Exceptional':
                                                echo '<li><img src="images/Exceptional.jpg" alt="Recipe 1" title="Recipe 1" /></li>';
                                            break;
                                            }
                                        ?>
                                        <!-- Displaying Rating of the restaruant -->
                                        <li><span>Rating Level: </span><?php echo $row['rating']; ?></li>
                                        <!-- Displaying Details of the restaruant -->
                                        <li><span>Details: </span><?php echo $row['description']; ?></li>
                                        <!-- Displaying watsapp link  of the restaruant based on the phone number of the restaruant -->
                                        <?php $watsapp="https://api.whatsapp.com/send/?phone=".$row['Contact']; ?>
                                        <!-- Displaying google map link  of the restaruant based on the latitude and longitude of the restaruant -->
                                        <?php $googleUrl="https://www.google.com/maps/search/?api=1&query=".$row['Latitude'].",".$row['Longitude']; ?>
                                        <li><a  href="<?php echo $watsapp ?>"><img width="40" height="40" src="images/watsapp.jpg"></a> <a href="<?php echo $googleUrl ?>"><img width="40" height="40" src="images/maps.jpg"></a></li>
                                        <!-- Instanciating the class and getting the current date to show slot available date -->
                                        <li><span>Slot Available on: </span><?php $obj = new findyourrestaurant(); echo $obj->getDate(); ?></li>
                                        
                                       
                                    </ul>
                                <?php }
                            } else { ?>
                                <ul class="rest">
                                <!-- If rows are zero from the data base showing a message no restaruants found -->
                                        <li><?php echo 'No Restaurants Found';?></li>
                               </ul>
                           <?php }
                           
                        }
        ?>
                   
        </div>
    </body>
    
    </html>