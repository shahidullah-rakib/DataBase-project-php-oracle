<?php $dbuser = 'SYSTEM';
            $dbpass = 'bikar';
            $connection_string = 'localhost/xe';
            //Connect to an Oracle database
            $conn = oci_connect($dbuser, $dbpass, $connection_string);
            $query = "select * from teacher";
            $statement = oci_parse($conn, $query);
            oci_execute($statement);
            
            echo "<table> 
            <h1> <u>TEACHERS INFORMATION</u> </h1>
            <tr>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>BLOOD_GROUP</th>
                <th>RELIGION</th>
                <th>SALARY</th>
                <th>DEPT</th>
            </tr>";
            // output data of each row
            
            while ($row = oci_fetch_array($statement, OCI_RETURN_NULLS + OCI_ASSOC)) {
                echo 
                "<tr><td>" . $row["NAME"] . 
                "</td><td>" . $row["USERNAME"] . 
                "</td><td>" . $row["EMAIL"] . 
                "</td><td>" . $row["BLOOD_GROUP"] . 
                "</td><td>" . $row["RELIGION"] . 
                "</td> <td>" . $row["SALARY"] .
                "</td> <td>" . $row["DEPT"] . 
                "</td></tr>";
            }
            echo "</table>";
            ?>