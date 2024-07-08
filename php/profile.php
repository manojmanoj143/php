<?php
session_start();
include("../db/connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>

 
<div class="container">

<div class="content">
   <h3>hi, <span>ALL</span></h3>
   <h1>welcome</h1>
   <p>this is an page</p>
   <a href="./index.php" class="btn">login</a></a>
   <a href="./index.php" class="btn">register</a>
   <a href="logout.php" class="btn">logout</a>
</div>

</body>
</html>