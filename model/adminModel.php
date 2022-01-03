<?php

function updateInfo($conn, $name, $email) {
    $sql = "UPDATE admin SET name = '$name', email = '$email' WHERE email = '$email'";
    $request = oci_parse($conn, $sql);
    oci_execute($request);
    return true;
}


function getTeacherinfo($conn, $username) {
    $sql = "SELECT * FROM teacher WHERE username='$username'";
    $request = oci_parse($conn, $sql);
    oci_execute($request);
    return oci_fetch_assoc($request);
}

function getStudentinfo($conn, $username) {
    $sql = "SELECT * FROM student WHERE username='$username'";
    $request = oci_parse($conn, $sql);
    oci_execute($request);
    return oci_fetch_assoc($request);
}

function updateTeacher($conn, $name, $username, $email, $blood_group, $religion, $salary, $dept) {
    $sql = "UPDATE teacher SET name='$name', email='$email', blood_group='$blood_group', religion='$religion', salary='$salary', dept='$dept' WHERE username='$username'";
    $request = oci_parse($conn, $sql);
    oci_execute($request);
    return true;
}

function updateStudent($conn, $name, $username, $email, $blood_group, $religion, $cgpa, $dept) {
    $sql = "UPDATE student SET name='$name', email='$email', blood_group='$blood_group', religion='$religion', cgpa='$cgpa', dept='$dept' WHERE username='$username'";
    $request = oci_parse($conn, $sql);
    oci_execute($request);
    return true;
}


