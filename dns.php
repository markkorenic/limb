<html lang="en">
<body style="background-color:beige;">
    <a href="index.php"> Return to L.I.M.B. Home</a>
<br>
<br>
<h2> D.N.S.</h2>

<?php
    $d = $_POST['domain'];
    $result = dns_get_record($d, DNS_CNAME);
    //print_r($result);
    ?>
<div class="container">
    <label>Lookup Host:</label>
    <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="domain">
        <br>
        <br>
        <input type="submit" value="Search" placeholder="@unm.edu">
    </form>
</div>
<hr>
<style>table, th, td {
        border:1px solid black;
    }
</style>
<table style="width:inherit">
<tr>

<?php
foreach($result as $dns) { ?>
    <th>Domain</th>
    <th>Host</th>
</tr>
    <tr>
      <td><?php echo $dns['host'];?></td>
      <td><?php echo $dns['target'];?></td>
    </tr>
<?php
}

?>


</table>
</body>
</html>

