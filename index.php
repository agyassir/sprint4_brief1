<?php 
include 'db.php';
include 'user.php';
include 'artical.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid d-flex " style="justify-content: center;">
    <form action="" method="GET">
        <div class="d-flex mb-3 mt-3" style="justify-content: center; flex-direction: column;">
        <input type="text" name="fname" placeholder="first name" class="mb-3" id="fname">
        <input type="text" name="lname" placeholder="last name" class="mb-3"id="lname">
        <input type="email" name="email" placeholder="email" class="mb-3"id="email">
        <input type="password" name="pwd" placeholder="password" class="mb-3"id="password">
        <select name="role" id="role" class="mb-3">
          <option value="1">admin</option>
          <option value="2">responsable</option>
          <option value="3">proprietaire</option>
        </select>
        <input type="submit" class="btn btn-success" name="submit" class="mb-3">
        </div>
    </form></div>
</body>
</html>



<?php


?>