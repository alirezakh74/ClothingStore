<?php
require_once("user_functions.php");

if(isset($_POST["submit_btn"])){
    // $title = $_POST['menu_title'];
    // $link = $_POST['menu_link'];
    // $parent_id = $_POST['menu_parent'];
    // $active_status = $_POST['menu_is_active'];

    $data = $_POST['frm'];
    user_login($data);
}

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن منو</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="sidebar">
        <div class="brand-name">
            <span>پنل کاربری</span>
        </div>
        <button><a href="dashboard.php"><i class="fa fa-home"></i> صفحه اصلی</a></button>
        <button class="dropdown-btn active"><i class="fa fa-caret-up"></i> مدیریت منوها</button>
        <div class="dropdown-container" style="height: 0px;">
            <a href="list_menus.php">فهرست منوها</a>
            <a class="active" href="new_menu.php">افزودن منوی جدید</a>
        </div>
    </div>

    <div class="content">
        <form class="list_menus_form" action="" method="post">
            <h2 class="title">افزودن منوی جدید</h2>
            <input type="text" name="frm[menu_title]" id="menu_title" placeholder="عنوان منوی مورد نظر را وارد کنید">
            <input type="text" name="frm[menu_link]" id="menu_link" placeholder="لینک منوی مورد نظر را وارد کنید">
            <label for="menu_parent">سرگروه</label>
            <select name="frm[menu_parent]" id="menu_parent">
                <option value="0">ندارد</option>
                <option value="1">عنوان 1</option>
                <option value="2">عنوان 2</option>
            </select>
            <div class="ative_status_radio">
                <input type="radio" id="active_status" name="frm[menu_is_active]" value="active">
                <label for="active_status">فعال</label>
            </div>
            <div class="ative_status_radio">
                <input type="radio" id="none_ative_status" name="frm[menu_is_active]" value="none_ative" checked>
                <label for="none_active_status">غیر فعال</label>
            </div>
            <input type="submit" name="submit_btn" id="submit_btn" value="افزودن">
        </form>
    </div>

    <script src="js/dropdown.js"></script>
</body>

</html>