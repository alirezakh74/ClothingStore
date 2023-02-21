<?php

require_once("Globals.php");

function config():mysqli
{

    $host = SERVER;
    $username = USERNAME;
    $password = PASSWORD;
    $database = MY_DATABASE;

    //start connection to database
    $conn = mysqli_connect($host, $username, $password);

    if ($conn) {
        //create databse
        $query = "CREATE DATABASE IF NOT EXISTS $database CHARACTER SET utf8 COLLATE utf8_persian_ci";

        if (mysqli_query($conn, $query)) {

            //if database is created then select database
            mysqli_select_db($conn, $database);
            //create admin_users table
            $query = "CREATE TABLE IF NOT EXISTS ".ADMIN_USERS_TBL." (
                id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(50) NOT NULL,
                lastname VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                password VARCHAR(50) NOT NULL
            )";

            if (!mysqli_query($conn, $query)) {
                echo "create admin_users table failed: " . mysqli_errno($conn);
                die;
            }

            //create menus table
            $query = "CREATE TABLE IF NOT EXISTS ".MENUS_TBL." (
                    id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    title VARCHAR(40) NOT NULL,
                    link VARCHAR(50) NOT NULL,
                    parent_id INT(3) UNSIGNED,
                    active INT(1) UNSIGNED NOT NULL
                )";

            if (!mysqli_query($conn, $query)) {
                echo "create menus table failed: " . mysqli_errno($conn);
                die;
            }

            return $conn;

        } else {
            echo "create database failed: " . mysqli_errno($conn);
            return NULL;
        }
    } else {
        echo "Connection failed: " . mysqli_connect_error();
        return NULL;
    }
}

function addMenu(){
    //$conn = connect();
    //$query = "INSERT INTO menus VALUES(NULL, )";
}
