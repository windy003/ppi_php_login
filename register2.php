<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<!-- register form -->
<form method="post" action="register.php" name="registerform">

<!-- the user name input field uses a HTML5 pattern check -->
<label for="login_input_username">用户名(只能是字母或数字)</label>
<input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

<!-- the email input field uses a HTML5 email type check -->
<label for="login_input_email">邮箱</label>
<input id="login_input_email" class="login_input" type="email" name="user_email" required />

<label for="login_input_password_new">密码,最少6个字符</label>
<input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

<label for="login_input_password_repeat">重复密码</label>
<input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
<input type="submit"  name="register" value="注册" />

</form>

<a href="index.php">回到登陆主页</a>


</head>
<body>
    
</body>
</html>
