<html lang="en">
<body style="background-color:beige;">
<a href="index.php"> Return to Search</a>
<br>
<br>
<?php
require_once('config.php');

$search = htmlspecialchars($_POST['search']);
// 'search' relates to the form name in index.php!

$sql = "select * from local_it where department like '%$search%'";
//Same here!

$result = mysqli_query($conn, $sql);
printf("Search returned %d result(s) for '{$search}'\n", mysqli_num_rows($result));

// TODO: Error checking here

?>
<!-- Display search query from index.php ---------------------->
  
<style>table, th, td {
    border:1px solid black;
    }
    </style>
    <table style="width:inherit">
        <tr>
            <th>Department</th>
            <th>Local IT</th>
            <th>Resolution</th>
            <!--<th>Action</th>-->
        </tr>

        <?php
        // fetch data based on search
        if ($result->num_rows > 0){
        while($row = $result->fetch_assoc() ){
        ?>
        <tr>
            <td><?php echo $row["department"];?></td>
            <td><?php echo $row["local_it"];?></td>
            <td><?php echo $row["resolution"];?></td>
            <!--<td><a href=\"edit.php?id=$res[id]\"><button>Edit</button></a></td>-->
        </tr>
            <?php
    }

} else {
    echo "0 records found" ;

}$conn->close();
?>
     </table>
   </body>
</html>

