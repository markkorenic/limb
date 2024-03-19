<?php include "templates/header.php" ?>
<link rel="stylesheet" href="css/style.css">
<a href="index.php"> Return to Search</a>
<br>
<br>
<?php

require_once('config.php');
require("check_input.php");
$search = check_input($_POST['search']);
if (isset($_POST['search'])) {
// 'search' relates to the form name in index.php, cool!

    $sql = "select * from local_it where department like '%$search%'";
    //Same here!

    if (isset($conn)) {
        $result = mysqli_query($conn, $sql);
        printf("Search returned %d result(s) for '$search'"."\n", mysqli_num_rows($result));
        echo "<br>";
    }
}
?>
<!-- Display search query from index.php ---------------------->
<style>table, th, td {
border:1px solid black;
}
</style>
<table>
    <thead>
    <tr>
        <th>Department</th>
        <th>Local IT</th>
        <th>Resolution</th>
        <th>Updated</th>

    </tr>
        <?php

        if (isset($result)) {
        // fetch data based on search
        if ($result->num_rows > 0){
        while($row = $result->fetch_assoc() ){
        ?>
        <tr>
            <td><?php echo $row["department"];?></td>
            <td><?php echo $row["local_it"];?></td>
            <td><?php echo $row["resolution"];?></td>
            <td><?php echo $row["updated"];?></td>
        </tr>
            <?php
        } // end while
    } // end if
}// end isset
 else {
     echo "0 records found";
     if (isset($conn)) {
         $conn->close();
     }//end isset
 }//end else

?>
</thead>
     </table>
