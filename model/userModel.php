<?php

function connectUser($conn, $username, $pwd)
{
    $sql = "SELECT *
    FROM users WHERE username = '$username' AND pwd = '$pwd'";
    $request = oci_parse($conn, $sql);
    oci_execute($request);
    return oci_fetch_assoc($request);
    // if(oci_fetch_assoc($request)) {
        
    // }
    // return false;
}


function getAdminInfo($conn, $username) {
    $sql = "SELECT *
    FROM admin WHERE username = '$username'";
    $request = oci_parse($conn, $sql);
    oci_execute($request);
    return oci_fetch_assoc($request);
    //return false;
}

function getTeacherInfo($conn, $username) {
    $sql = "SELECT *
    FROM teacher WHERE username = '$username'";
    $request = mysqli_query($conn, $sql);
    if (mysqli_num_rows($request)) {
        return mysqli_fetch_assoc($request);
    }
    return false;
}

function getStudentInfo($conn, $username) {
    $sql = "SELECT *
    FROM student WHERE username = '$username'";
    $request = mysqli_query($conn, $sql);
    if (mysqli_num_rows($request)) {
        return mysqli_fetch_assoc($request);
    }
    return false;
}

?>