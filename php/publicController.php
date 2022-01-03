<?php

// if(!session_id()){
//     echo "You don't have permission to see this page!";
//     header("Location: ../index.php");
// }


require_once('view\loginView.php');
require_once('model\userModel.php');

if (isset($_REQUEST["submit"])) {
    if (isset($_REQUEST["username"], $_REQUEST["pwd"])) {
        $username = htmlspecialchars(strip_tags(trim($_REQUEST["username"])), ENT_QUOTES);
        $pwd = htmlspecialchars(strip_tags(trim($_REQUEST["pwd"])), ENT_QUOTES);

        $connect = connectUser($db, $username, $pwd);
        if ($connect) {
            if($connect['TYPE'] == 'admin') {
                $info = getAdminInfo($db, $connect['USERNAME']);

            }
            else if($connect['TYPE'] == 'teacher') {
                $info = getAdminInfo($db, $connect['USERNAME']);

            }
            else if($connect['TYPE'] == 'student') {
                $info = getAdminInfo($db, $connect['USERNAME']);

            }
            $user = array_merge($connect, $info);
            $_SESSION = $user;
            $_SESSION['identifier'] = session_id();
            header("Location: ./");
            exit();
        } else {
            $error = "username & password do not match!";
        }
    }
    require_once "view\loginView.php";
    exit();
}