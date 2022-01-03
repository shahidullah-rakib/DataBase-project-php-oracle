<html>
    <head>
        <title>DELETE</title>

    </head>

    <body>

    <?php
session_start();



$EMAIL = $_GET['EMAIL'];

$dbuser = 'SYSTEM';
$dbpass = 'bikar';
$connection_string = 'localhost/xe';
//Connect to an Oracle database
$conn = oci_connect($dbuser, $dbpass, $connection_string);
$query = "delete from teacher WHERE EMAIL = '$EMAIL'";
$statement = oci_parse($conn, $query);
oci_execute($statement);


while ($row = oci_fetch_assoc($userQuery)) {
    $EMAIL = $row['EMAIL'];
    
}
if (isset($_POST['delete'])) {
    
    $userQuery = oci_parse($conn, "DELETE FROM TEACHER WHERE EMAIL = '$EMAIL'");;
    $r = oci_execute($userQuery);
    // $row = oci_fetch_assoc($userQuery);
    // print_r($row);
    if ($r) {
        // $_SESSION["username"] = $row['ADMIN_EMAIL'];
        // $_SESSION["userid"] = $row['ADMIN_ID'];
        // $_SESSION["email"] = $row['EMAIL'];
        // $_SESSION["pass"] = $row['PASSWORD'];
        header("location: ../view/deleteControlTeacher.php");
        // $_SESSION['success'] = "Login Successful";
    } else {
        $error = "Username or Password is invalid";
    }
    // header("../views/PreviousComplain.php");
    
}


?>

    <section>
        <div >
            <form method="post"><input type="hidden" name="EMAIL" value="<?php echo $_GET['EMAIL'] ?>">
                <h1>Confirm Deleting............. </h1>
                <h3>Complain ID: <?php echo $EMAIL ?></h3>
                <h3>Complain DESCRIPTION: <?php echo $COMPLAIN_DESCRIPTION ?></h3>
                <h3>Complain Topic: <?php echo $COMPLAIN_TOPIC ?></h3>
                <input type="submit" value="Delete" name="delete">
                <input  type="submit" name="cancel" value="Cancel">
            </form>
        </div>
    </section>
    </body>


</html>





