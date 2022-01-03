<?php
session_start();
include_once '../model/conn.php';
include_once '../model/adminModel.php';
$db = connectDBModel();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $result = updateInfo($db, $name, $email);
    if($result) {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        echo 'success';
    }
}

if(isset($_POST['update-teacher'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $blood_group = $_POST['blood_group'];
    $religion = $_POST['religion'];
    $salary = $_POST['salary'];
    $dept = $_POST['dept'];
    $result = updateTeacher($db, $name, $username, $email, $blood_group, $religion, $salary, $dept);
    if($result) {
        echo 'success';
    }
}

if(isset($_POST['update-student'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $blood_group = $_POST['blood_group'];
    $religion = $_POST['religion'];
    $cgpa = $_POST['cgpa'];
    $dept = $_POST['dept'];
    $result = updateStudent($db, $name, $username, $email, $blood_group, $religion, $cgpa, $dept);
    if($result) {
        echo 'success';
    }
}


// if(isset($_POST['admin-register'])) {
//     $name = $_POST['name'];
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $result = adminRegistration($db, $name, $username, $email, $password);
//     if($result) {
//         echo 'success';
//     } else {
//         echo mysqli_error($db);
//     }
// }