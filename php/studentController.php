<?php
include_once 'model\adminModel.php';

if (!session_id()) {
    echo "You don't have permisson to see this page!";
    header("Location: ../");
    exit();
}


if (!isset($_GET["p"])) {
    require_once "view/studentView.php";
}

if(isset($_GET["p"]) && $_GET["p"]=="editme") {
    require_once "view\adminEditView.php";
}
if(isset($_GET["p"]) && $_GET["p"]=="add-teacher") {
    require_once "view\\teacherregistration.php";
}
if(isset($_GET["p"]) && $_GET["p"]=="add-Student") {
    require_once "view\\studentregistration.php";
}
 

if(isset($_GET["p"]) && $_GET["p"]=="edit-teacher") {
    if(isset($_POST['search'])) {
        $result = getTeacherinfo($db, $_POST['search-field']);
    }
    require_once "view\\teacherUpdateView.php";
}

if(isset($_GET["p"]) && $_GET["p"]=="edit-student") {
    if(isset($_POST['search'])) {
        $result = getStudentinfo($db, $_POST['search-field']);
    }
    require_once "view\studentUpdateView.php";
}

if(isset($_GET["p"]) && $_GET["p"]=="register-admin") {
    require_once "view\adminRegisterView.php";
}