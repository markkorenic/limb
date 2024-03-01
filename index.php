<?php require_once('config.php'); ?>

<html lang="en">
<title> L.I.M.B.</title>
<body style="background-color:beige;">
<h2> L.I.M.B. <img src="limb.png" alt="limb" style="width:35px;height:35px;"></h2>

<div class="container">
    <label>Lookup Department:</label>
    <form action="search.php" method="post">
      <input type="text" name="search">
    <br>
        <br>
        <input type="submit" value="Search" placeholder="Department">
    </form>
</div>
 <a href="dns.php">DNS Lookup</a> 
<hr>
<!-- maybe put search results here from search.php.-->
</body>
</html>
