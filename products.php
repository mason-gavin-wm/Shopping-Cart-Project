<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 2/1/16
 * Time: 2:53 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>iApple - Products</title>
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
            <img src="http://www.imore.com/sites/imore.com/files/styles/xlarge_wm_blw/public/field/image/2015/05/apple-watch-two-iphones-hero.jpg?itok=n-r8yRgW" style="width:100%;height:100%;"/>
        </div>
    </section>



    <div id="content-pic" >


        <div id="pic-1">

            <span>iPad's</span>

            <img src="http://www.i-teach.org.uk/uploads/iPad-Air-The-Power-Of-Lightness.png" style="width: 100%;height: 60%;">
                <p>Our iPad's are the best, click <a href="iPad.php" style="color:orange;">Here</a> to check some</p>
                <p>of check some of them out!</p>

        </div>





        <div id="pic-2">

            <span>iPhone's</span>

            <img src="http://cdn2.pcadvisor.co.uk/cmsdata/reviews/3572846/iPhone_6_PLUS_preview_MG_1834.jpg" style="width: 100%;height: 60%;">
                <p>Our iPhone's are the best, click <a href="iPhone.php" style="color:orange;">Here</a> to check some</p>
                <p>of check some of them out!</p>

        </div>


            <div id="pic-3">

            <span>Apple Watch's</span>

            <img src="http://cdn.bmwblog.com/wp-content/uploads/2015/04/Apple-Watch-models.jpg" style="width: 100%;height: 60%;">
                <p>Our watces are the best, click <a href="watch.php" style="color:orange;">Here</a> to check some</p>
                <p>of check some of them out!</p>

        </div>

    </div>

    <div id="content-more-info">

        <h2></h2>








    </div>

</div>


</body>
</html>
