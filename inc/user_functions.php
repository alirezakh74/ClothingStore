<?php

require_once("functions.php");

function user_login($data):bool
{
    $conn = config();

    $query = "SELECT * FROM ".ADMIN_USERS_TBL." WHERE email='$data[email]' AND password='$data[password]'";
    if ($conn) {
        $result = mysqli_query($conn, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $row['email'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                return true;
            }
        }
        // else{
        //     return false;
        // }
    }
    return false;
}

// $arr = array("email" => "alirezakhodabande74@gmail.com", "password" => "2901");
// user_login($arr);

?>