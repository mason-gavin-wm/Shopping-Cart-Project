<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 1/28/16
 * Time: 1:40 PM
 */

?>
<!DOCTYPE html>
<html>
<head>
    <title>iApple - Home</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="jquery copy.js"></script>
    <script src="java.js"></script>
</head>

<body>

<div id="container">

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


    <section class="slideshow">
        <div class="slideshow-container slide">
            <img src="http://image4.pushauction.com/0/0/043ca1bb-8815-4e61-b4fa-0b35b5fbf84a/8f561aa7-a326-47cb-93ae-05a6b6f8fe19.jpg" style="width:100%;height:100%;"/>
        </div>
    </section>



    <div id="content-pic" >

        <div id="pic-1" style="background-color:#434343;color:white;height:250px;">

            <span>News</span><br>
            <br><p><font style="color:gold;font-size:17px;">Latest News:</font> iApple have received a new shipment of iPad Pro's, iPad Air 2's, and iPad Air's! All starting from $600 or less!</p>
            <p><font style="color:gold">Jan. 8 2016:</font> iApple have received a new shipment of iPhone 6s plus, iPone 6s, and iPhone 5s! Each Starting from $300 or less!</p>
            <p><font style="color:gold">Jan. 5 2016:</font> iApple have received a new shipment of Apple Watches! In a variety of color (black, white, silver) and pricing starting from $650!</p>



        </div>

        <div id="pic-2" style="background-color:#434343;color:white;height:250px;">

            <span>About</span><br>
            <br><p>iApple is all about selling the newest <font style="color:gold">iPad's</font>, <font style="color:gold">iPhone's</font>, and <font style="color:gold">Watch's</font> at an affordable price to people like you who want the best products, but not there prices.</p>
            <br><p>Every product is brand new and not open or used at all, we believe to make everyone up to date in today's fast pace modern times in technology.</p>
            <p>To learn more about our company click <a href="about.php" style="text-decoration: underline; color:orange;">Here</a></p>


        </div>

        <div id="pic-3" style="background-color:#434343;color:white;height:250px;">

            <span>Contact</span><br>
            <br><p><strong>To contact customer support</strong> please call the number below:<br><font style="color:gold">132-123-5678</font><br><br>
                <strong>To report any problems</strong> your electronic may happen please call the number below:<br><font style="color:gold">654-937-0173</font> <br><br>
                <strong>Or send an email</strong> to this address:<br>
                <font style="color:gold">iSupport@iapple.org</font></p>



        </div>


    </div>

    <div id="content-more-info" style="position:absolute;margin-top:200px;margin-left:41%">

        <h2 style="text-decoration: underline">Title placing goes here</h2>








    </div>

</div>


</body>
</html>