<?php
session_start();

require_once('./model/conn.php');

$db = connectDBModel();

if(!$db) {
    include_once "./view/errorView.php";
    exit();
}

if (isset($_SESSION['identifier']) && $_SESSION['identifier'] == session_id()) {
    if ($_SESSION['TYPE'] == 'admin') {
        require_once "php/adminController.php";
        exit();
    }
    else if ($_SESSION['TYPE'] == 'teacher') {
        require_once "php/teacherController.php";
        exit();
    }
    else if ($_SESSION['TYPE'] == 'student') {
        require_once "php/studentController.php";
        exit();
    }
}

require_once("./php/publicController.php");


// $stid = oci_parse($conn, 'SELECT * FROM customers');
// oci_execute($stid);
// var_dump(oci_fetch_assoc($stid));