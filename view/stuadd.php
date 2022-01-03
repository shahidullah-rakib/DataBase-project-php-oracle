<?php 
         if($_SERVER["REQUEST_METHOD"]=="POST")
       {
        $id=$_REQUEST['id'];
         $name=$_REQUEST['name'];
         $username=$_REQUEST['username'];
         $email=$_REQUEST['email'];
         $blood_group=$_REQUEST['blood_group'];
         $salary=$_REQUEST['cgpa'];
         $dept=$_REQUEST['dept'];
         $religion=$_REQUEST['religion'];

         $sql = " begin INSERT INTO STUDENT VALUES (:name,:username,:email,:blood_group,:religion,:salary,:dept); end; ";
    //$conn = oci_connect('SYSTEM','bikar');
    $conn = oci_connect('SYSTEM','bikar','localhost/XE');
   $REQUEST = oci_parse($conn, $sql);
   oci_bind_by_name($REQUEST, ":id", $id);
   oci_bind_by_name($REQUEST, ":name", $name);
    oci_bind_by_name($REQUEST, ":username", $username);
     oci_bind_by_name($REQUEST, ":email", $email);
      oci_bind_by_name($REQUEST, ":blood_group", $blood_group);
       oci_bind_by_name($REQUEST, ":religion", $religion);
       oci_bind_by_name($REQUEST, ":cgpa", $salary);

oci_bind_by_name($REQUEST, ":dept", $dept);

    oci_execute($REQUEST);

     }
        ?>