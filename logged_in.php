<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<?php

require_once("config/db.php");

require_once("classes/Login.php");


$login = new Login();


if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("dashboard.html");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("not_logged_in.php");
}




?>