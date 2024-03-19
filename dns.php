<?php include "templates/header.php" ?>
<link rel="stylesheet" href="css/style.css">
<a href="index.php">Return to L.I.M.B. Home</a>
<br>
<br>
<h2>DNS Lookup</h2>
<?php
/*---------------------------------------------------------
*
* put logic in check_input.php
* This way, dns.php will look cleaner with mostly html
*
* ---------------------------------------------------------*/
include("check_input.php");

?>
<div class="container">
    <label>Lookup Host:</label>

    <form action="<?php check_input($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="domain" placeholder="my.unm.edu"> <br>
        <span style="color:red;">* <?php if (!empty($website_err)) {
                echo $website_err;
            } ?></span>
        <br>
        <br>
        <input type="submit" value="Search">
    </form>
</div>
<hr>
<style>table, th, td {
        border:1px solid black;
    }
</style>
<?php
if (!empty($result)){
foreach($result as $dns) { ?>
    <table>
        <tr>
    <th>Domain</th>
    <th>Host</th>
</tr>
    <tr>
      <td><?php echo $dns['host'];?></td>
      <td><?php echo $dns['target'];?></td>
    </tr>
<?php
}
}
?>
</table>
