<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 2/11/16
 * Time: 1:35 PM
 */

function addInfo(){
$servername = "localhost";
$username = "root";
$password = "root";

    $conn = new mysqli($servername, $username, $password, "iApple");
    // set the PDO error mode to exception
    if ($conn -> connect_error) {

    die("connection failed" . $conn->connect_error);
    }


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];

    $sql = "INSERT INTO users (first_name, last_name, password, email) VALUES (" . $first_name . "," . $last_name . "," . $password . ","  . $email . ")";

    if($conn -> query($sql)=== TRUE) {

        echo"it worked";
    }
    else{
        echo"sorry it didn't";
    }

}
if( ! empty($_POST["first_name"])){
    addInfo();
}

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
<form name="form" method="post">

    <input type="text" name="first_name">

    <input type="text" name="last_name">

    <input type="text" name="password">

    <input type="text" name="email">

    <button type="submit">Sign up Now</button>

</form>
</body>
</html>
