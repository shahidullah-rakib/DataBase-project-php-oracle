<?php

function connectDBModel() {
    $conn = oci_connect('SYSTEM','bikar','localhost/XE');
    if(!$conn) {
        $e = oci_error();
        return $e;
    }
    return $conn;
}