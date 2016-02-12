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
    <title>iApple - iPad's</title>
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
            <img src="http://www.i-teach.org.uk/uploads/iPad-Air-The-Power-Of-Lightness.png" style="width:100%;height:100%;"/>
        </div>

    </section>

    <div id="content-pic">

        <div id="pic-1" style="height:450px;">

            <span style="color:gold;">iPad Pro </span>

            <img src="http://www.notebookcheck.net/typo3temp/_processed_/csm_4_zu_3_teaser_09_08a6d2673b.jpg" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$800</strong></div>

                <h4><span style="color:#eaeaea;">Features:</span></h4>
                        -32 GB<br>
                        -12.9-inch (diagonal) LED-backlit widescreen Multi-Touch display<br>
                        -2732-by-2048 resolution at 264 pixels per inch (ppi)<br>

            <button style="text-align:center">Add to Cart!</button>

        </div>

        <div id="pic-2" style="height:450px;">

            <span style="color:gold;">iPad Air 2</span>

            <img src="http://content.abt.com/image.php/1_MGTX2LLA.jpg?image=/images/products/BDP_Images/1_MGTX2LLA.jpg&canvas=1&quality=100&min_w=450&min_h=320&ck=373" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$500</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -64 GB<br>
            -9.7-inch (diagonal) LED-backlit widescreen Multi-Touch display with IPS technology<br>
            -2048-by-1536-pixel resolution at 264 ppi<br>

            <button style="text-align:center">Add to Cart!</button>


        </div>

        <div id="pic-3" style="height:450px;">

            <span style="color:gold;">iPad Air</span>

            <img src="http://b-i.forbesimg.com/patrickmoorhead/files/2013/11/iPad-Air.jpg" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$400</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -16 GB<br>
            -9.7-inch (diagonal) LED-backlit Multi-Touch display with IPS technology<br>
            -2048-by-1536 resolution at 264 pixels per inch (ppi)<br>

            <button style="text-align:center">Add to Cart!</button>



        </div>


    </div>

</div>


</body>
</html>