<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body style="background-color: #003aff;">
    <h1 style="color:cornsilk">Let's fetch the results from the database: </h1>
    <form method="POST" action="index.php" style="color:cornsilk">
    <input type="submit" name="submit" value="Fetch">
    </form>
</body>
</html>

<?php
include_once('userInput.php');
if (isset($_POST['submit'])) {
    $object = new Data();
    $object->Selection1();
}
?>
