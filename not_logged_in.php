<?php


// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="logged_in.php" name="loginform">

<label for="login_input_username">用户名:</label>
<input id="login_input_username" class="login_input" type="text" name="user_name" required />

<label for="login_input_password">密码:</label>
<input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

<input type="submit"  name="login" value="登陆" />

</form>

<a href="register.php">注册</a>


</body>
</html>

