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
    <title>iApple - Watch's</title>
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
            <img src="http://cdn.bmwblog.com/wp-content/uploads/2015/04/Apple-Watch-models.jpg" style="width:100%;height:100%;"/>
        </div>

    </section>


    <div id="content-pic">

        <div id="pic-1" style="height:500px;">

            <span style="color:gold;">Watch</span>

            <img src="http://betanews.com/wp-content/uploads/2015/03/apple-watch-steel.jpg" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$400</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -38mm Stainless Steel Case with Milanese Loop<br>

            <button style="text-align:center">Add to Cart!</button>


        </div>

        <div id="pic-2" style="height:500px;">

            <span style="color:gold;">Watch Sport</span>


            <img src="http://i-cdn.phonearena.com/images/articles/179791-image/Apple-Watch-Sport.jpg" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$600</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -42mm Stainless Steel Case Sport Band Blue<br>

            <button style="text-align:center">Add to Cart!</button>

        </div>

        <div id="pic-3" style="height:500px;">

            <span style="color:gold;">Watch Edition</span>

            <img src="http://www.valuewalk.com/wp-content/uploads/2015/03/AW_Edition.jpg" style="width:100%;height:50%;">

            <div>Price: <strong style="color:orange">$8,500</strong></div>

            <h4><span style="color:#eaeaea;">Features:</span></h4>
            -42mm 18-Karat Rose Gold Case with Midnight Blue Classic Buckle)<br>

            <button style="text-align:center">Add to Cart!</button>


        </div>


    </div>

</div>


</body>
</html>