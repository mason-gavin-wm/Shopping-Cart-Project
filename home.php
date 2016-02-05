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
    <title>NAME_OF_SITE</title>
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


                <div id="quickslider">
                    <div class="quickslider" >
                        <img  id="1" src="http://www.i-teach.org.uk/uploads/iPad-Air-The-Power-Of-Lightness.png">
                        <img  id="2" src="http://www.iphone6updates.us/wp-content/uploads/2013/04/Apple-iPhone-6-Concept-45.jpg">
                        <img  id="3" src="http://wallpapershome.com/images/wallpapers/apple-watch-3840x2160-watches-wallpaper-5k-4k-review-iwatch-apple-3515.jpg">
                    </div><!--quickslider-->

                    <div class="nav-thumbs">
                        <ul>
                            <li><a href="#" class="1">1</a></li>
                            <li><a href="#" class="2">2</a></li>
                            <li><a href="#" class="3">3</a></li>
                        </ul>
                    </div>

                    <div class="quickslider-nav" >
                        <a href="#" class="left">Prev</a>
                        <a href="#" class="right" onclick="next(); return false;">Next</a>
                    </div>
                </div><!--quickslider-->



<div id="buttonz-slide">

</div>


    <div id="content-pic">

        <div id="pic-1">

            <span>News</span>
            <p>News about the new products</p>



        </div>

        <div id="pic-2">

            <span>About</span>
            <p>About the company</p>


        </div>

        <div id="pic-3">

            <span>Contact</span>
            <p>Contact info about the company</p>


        </div>


    </div>

        <div id="content-more-info">










        </div>

</div>


</body>
</html>