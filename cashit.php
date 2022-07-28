<?php include('includes/connection.php'); 
    $rname='';
    $rdesc='';
    $rambience = '';

    if(!empty($_POST)){
        $dis = mysqli_real_escape_string($conn, $_POST['discount']);
        $sql = "SELECT * FROM restaurants WHERE discount='$dis'";
        $results = mysqli_query( $conn, $sql );
          
                              while ($row = mysqli_fetch_assoc($results)) {     
                                   $rname = $row['name'];
                                   $rdesc = $row['description'];
                                   $rambience = $row['ambience'];
                               }
                                
                            
    }
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
                    <h1>Find Your Restaurant</h1>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" id="disForm" onsubmit = "event.preventDefault(); getDiscountRestaurants();">
                    <select class="restaurants" id="selectDiscount" name="discount">
                        <option class="list-item" value="" >Select Discount</option>
                        <?php
                            $sql = 'SELECT * FROM restaurants';
                            $result = mysqli_query( $conn, $sql );
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                   echo '<option class="list-item" value="'.$row['discount'].'" >'.$row['discount'].'</option>';
                                }
                            } else {
                                echo '<option class="list-item" value="" >No Discounts</option>';
                            }
                        ?>
                    </select>
                       
                
                    <button name="find" value="1" type="submit" id="findYourRestaurants">Find Restaurants</button>
                </form>

                <div class="restaurantDetails">
                    <h2><?php echo $rname; ?> </h2>
                    <p><?php echo $rambience; ?></p>
                    <p><?php echo $rdesc; ?></p>
                </div>
        </div>
    </body>
    
    </html>