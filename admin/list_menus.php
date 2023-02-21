<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل کاربری</title>
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
            <a class="active" href="list_menus.php">فهرست منوها</a>
            <a href="new_menu.php">افزودن منوی جدید</a>
        </div>
    </div>

    <div class="content">
        <h2>فهرست منوها</h2>
        <form class="list_menus_form" action="" method="post">
            <input type="text" name="menu_title" id="menu_title" placeholder="عنوان منوی مورد نظر را وارد کنید">
            <input type="text" name="menu_link" id="menu_link" placeholder="لینک منوی مورد نظر را وارد کنید">
            <label for="menu_parent">سرگروه</label>
            <select name="menu_parent" id="menu_parent">
                <option value="0">ندارد</option>
                <option value="1">عنوان 1</option>
                <option value="2">عنوان 2</option>
            </select>
            <div class="ative_status_radio">
                <label for="active_status">فعال</label>
                <input type="radio" id="active_status" name="active_status" value="active_status">
            </div>
            <div class="ative_status_radio">
                <label for="active_status">غیر فعال</label>
                <input type="radio" id="none_ative_status" name="active_status" value="none_ative_status" checked>
            </div>
            <input type="submit" name="submit_btn" id="submit_btn">
        </form>
    </div>

    <script src="js/dropdown.js"></script>
</body>

</html>