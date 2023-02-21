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
        <button class="active"><a href="dashboard.php"><i class="fa fa-home"></a></i> صفحه اصلی</button>
        <button class="dropdown-btn"><i class="fa fa-caret-up"></i> مدیریت منوها</button>
        <div class="dropdown-container" style="height: 0px;">
            <a href="list_menus.php">فهرست منوها</a>
            <a href="new_menu.php">افزودن منوی جدید</a>
        </div>
    </div>

    <div class="content">
        <h2>صفحه اصلی</h2>
    </div>

    <script src="js/dropdown.js"></script>
</body>

</html>