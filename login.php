<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "demo";

mysqli_connect($host, $user, $password);
mysqli_select_db($db);

if (isset($_POST['username'])) {

    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from loginform where user='" . $uname . "'AND Pass='" . $password . "' limit 1";

    $result = mysqli_query($sql);

    if (mysqli_num_rows($result) == 1) {
        echo " You Have Successfully Logged in";
        exit();
    } else {
        echo " You Have Entered Incorrect Password";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Login Form in HTML5 and CSS3</title>
    <link rel="stylesheet" a href="css\stylee.css">
    <link rel="stylesheet" type="text/css" href="./stylee.css" />
</head>

<body>
    <div class="container">
        <img src="image/login.png" />
        <form>
            <div class="form-input">
                <input type="text" name="text" placeholder="Enter the User Name" />
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="password" />
            </div>
            <input type="submit" type="submit" value="LOGIN" class="btn-login" />
        </form>
    </div>
</body>

</html>