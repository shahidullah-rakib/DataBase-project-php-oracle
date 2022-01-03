<?php 
         if($_SERVER["REQUEST_METHOD"]=="POST")
       {
         $name=$_REQUEST['name'];
         $username=$_REQUEST['username'];
         $email=$_REQUEST['email'];
         $blood_group=$_REQUEST['blood_group'];
         $salary=$_REQUEST['salary'];
         $dept=$_REQUEST['dept'];
         $religion=$_REQUEST['religion'];

        $sql = " begin INSERT INTO TEACHER VALUES (:name,:username,:email,:blood_group,:religion,:salary,:dept); end; ";
    //$conn = oci_connect('system','1234');
    $conn = oci_connect('SYSTEM','bikar','localhost/XE');
   $REQUEST = oci_parse($conn, $sql);
   oci_bind_by_name($REQUEST, ":name", $name);
   oci_bind_by_name($REQUEST, ":username", $username);
   oci_bind_by_name($REQUEST, ":email", $email);
   oci_bind_by_name($REQUEST, ":blood_group", $blood_group);
   oci_bind_by_name($REQUEST, ":religion", $religion);
   oci_bind_by_name($REQUEST, ":salary", $salary);
   oci_bind_by_name($REQUEST, ":dept", $dept);

    //oci_execute($REQUEST);
    $r = oci_execute($REQUEST);
    if ($r) {
        echo ' data is inserted...<br>';
        //header("location: index.php");
    } else {
        echo 'data was not inserted...<br>';
    }

     }
        ?>