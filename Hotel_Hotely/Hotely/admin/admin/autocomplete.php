<?php
   include('connection.php');
    //fetch department names from the department table
    $sql = "select name from user";
    $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

    $dname_list = array();
    while($row = mysqli_fetch_array($result))
    {
        $dname_list[] = $row['name'];
    }
    echo json_encode($dname_list);
?>
