<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 2/5/16
 * Time: 2:45 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>iApple - iPhone's</title>
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
            <img src="http://cdn2.pcadvisor.co.uk/cmsdata/reviews/3572846/iPhone_6_PLUS_preview_MG_1834.jpg" style="width:100%;height:100%;"/>
        </div>

    </section>

    <div id="content-pic">

        <div id="pic-1" style="height:500px;">

            <span style="color:gold;">iPone 6s Plus </span>

            <img src="http://img-teknosa.mncdn.com/TeknosaImg/productImages/1024x783/125071341-1-iphone_6_plus_16_gb_silver_akilli_telefon.jpg" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$749</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -64 GB<br>
            -5.5-inch display<br>
            -1920-by-1080-pixel resolution at 401 ppi<br>
            <br>

            <button style="text-align:center">Add to Cart!</button>


        </div>

        <div id="pic-2" style="height:500px;">

            <span style="color:gold;">iPone 6s</span>

            <img src="http://www.webantics.com/content/images/thumbs/0034787_apple-iphone-6s-plus-silicone-case-antique-white.jpeg" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$649</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -64 GB<br>
            -4.7-inch display<br>
            -1334-by-750-pixel resolution at 326 ppi<br>
            <br>

            <button style="text-align:center">Add to Cart!</button>

        </div>

        <div id="pic-3" style="height:500px;">

            <span style="color:gold;">iPone 5s </span>

            <img src="https://www.houseofphonesng.com/wp-content/uploads/2015/11/iphone-5s-white.png" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$450</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -32 GB<br>
            -4-inch display<br>
            -1136-by-640-pixel resolution at 326 ppi<br>
     <br>

            <button style="text-align:center">Add to Cart!</button>


        </div>


    </div>

</div>


</body>
</html>