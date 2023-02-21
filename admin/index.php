<?php
session_start();

require_once("../inc/user_functions.php");

if(isset($_POST['frm']['btn']))
{
    $data = $_POST['frm'];
    if(user_login($data))
    {
        header("Location: dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="login_body">

    <div class="login_form">
        <h2>فرم ورود</h2>
        <form action="" method="post">
            <input type="text" name="frm[email]" id="email" placeholder="ایمیل">
            <input type="password" name="frm[password]" id="password" placeholder="رمز عبور">
            <input type="submit" name="frm[btn]" id="submit_btn" value="login">
        </form>
    </div>

    <script src="js/dropdown.js"></script>
</body>

</html>