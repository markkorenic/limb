<?php require_once('config.php'); ?>

<html lang="en">
<head>
    <title> L.I.M.B.</title>
</head>
<link rel="stylesheet" href="css/style.css">

<body style="background-color:beige;">
<h2> L.I.M.B. <img src="limb3.png" alt="limb" style="width:35px;height:35px;"></h2>

<div class="container">
    <label>Lookup Department:</label>
    <form action="search.php" method="post">
      <input type="text" name="search" placeholder="Registrars" required >
    <br>
        <br>
        <input type="submit" value="Search">
    </form>
</div>
 <a href="dns.php">DNS Lookup</a> 
<hr>
</body>
</html>
