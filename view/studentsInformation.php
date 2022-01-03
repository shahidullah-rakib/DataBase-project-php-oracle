<?php $dbuser = 'SYSTEM';
            $dbpass = 'bikar';
            $connection_string = 'localhost/xe';
            //Connect to an Oracle database
            $conn = oci_connect($dbuser, $dbpass, $connection_string);
            $query = "select * from student";
            $statement = oci_parse($conn, $query);
            oci_execute($statement);
            
            echo "<table> 
            <h1> <u>STUDENTS INFORMATION</u> </h1>
            <tr>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>CGPA</th>
                <th>BLOOD_GROUP</th>
                <th>DEPT</th>
                <th>RELIGION</th>
            </tr>";
            // output data of each row
            
            while ($row = oci_fetch_array($statement, OCI_RETURN_NULLS + OCI_ASSOC)) {
                echo 
                "<tr><td>" . $row["NAME"] . 
                "</td><td>" . $row["USERNAME"] . 
                "</td><td>" . $row["EMAIL"] . 
                "</td><td>" . $row["CGPA"] . 
                "</td><td>" . $row["BLOOD_GROUP"] . 
                "</td> <td>" . $row["DEPT"] .
                "</td> <td>" . $row["RELIGION"] . 
                "</td></tr>";
            }
            echo "</table>";
            ?>