<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 2/1/16
 * Time: 2:54 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>iApple - Shopping_Cart</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="jquery copy.js"></script>
    <script src="java.js"></script>
</head>

<body>

<div id="container" style="height:700px;">

    <div id="H-navigation">
        <nav>

            <ul>

                <li><a href="home.php"><img src="http://www.clker.com/cliparts/i/s/H/f/4/T/apple-logo-white.svg" style="width:35px;height:35px;position: absolute"></a></li>

                <li>
                    <div id="circle" style="border-radius:25px; background-color: white;position: absolute;width:37px;height:37px; margin-top:5px;">
                        <a href="shopping_cart.php"><img src="http://cdn.flaticon.com/png/256/2772.png" style="width:27px; height:27px;margin-left:4px;margin-top:1px;"></a>
                    </div>
                </li>

                <li class="hover"><a href="products.php" >Products</a>
                    <ul>
                        <li><a href="iPad.php">iPad</a></li>
                        <li><a href="iPhone.php">iPhone</a></li>
                        <li><a href="watch.php">Watch</a></li>
                    </ul>
                </li>


                <li class="hover"><a href="personal_profile.php" style="margin-left:1100px;position: absolute;">Profile</a></li>

            </ul>

        </nav>
    </div>

<h1 style="margin-top:100px; text-align:center;"> Your Shopping Cart!(in progress still)</h1>

    <div id="content-pic" style="margin-top:125px;">

        <div id="pic-1">

            <span  style="margin-left:10%;">Current Cart Items</span>
            <p>This is were each item the eprson has added to their cart will show up</p>



        </div>

        <div id="pic-2">

            <span style="margin-left:10%;">Shipping and Handling Fees</span>
            <p>This will be two random numbers that will be added to your total amount from your cart items</p>


        </div>

        <div id="pic-3">

            <span  style="margin-left:20%">Purchase Now</span>
            <p>BIG PURCHASE NOW BUTTON WITH TOTAL AMOUNT EVERYTHING THEY HAVE GOTTEN IS</p>


        </div>


    </div>

    <div id="content-more-info">

        <h2></h2>








    </div>

</div>


</body>
</html>