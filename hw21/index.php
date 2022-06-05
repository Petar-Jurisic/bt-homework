<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body style="background-color: #003aff;">
    <h1 style="color:cornsilk; text-align:center">Let's fetch the results from the database: </h1>
    <form method="POST" action="index.php" style="color:cornsilk">
    <input  style="margin-left:47%; background-color:DarkGreen; color:CornSilk" type="submit" name="submit" value="CLICK ME!">
    </form>
</body>
</html>

<?php

$pdo = new PDO("mysql:host=localhost; dbname=zadatak21", "root", "");
$query1 = "SELECT * FROM colors WHERE status='1' ORDER BY created_at";
$query2 = "SELECT * FROM colors ORDER BY RAND() LIMIT 5";
$query3 = "INSERT INTO `colors`(`name`, `hex_value`, `status`) VALUES ('DarkViolet','#9400d3','1')";
$query4 = "UPDATE `colors` SET `status`='1' WHERE `status`='0'";
$query5 = "DELETE FROM `colors` WHERE id='5'";
$query6 = "DELETE FROM colors ORDER BY updated_at LIMIT 1";
$d = $pdo->query($query1);

if (isset($_POST['submit'])) {  

?>
<br>
<table border="3" cellpadding="5" cellspacing="5" align="center">
    <tr align="center">
        <th>id</th>
        <th>name</th>
        <th>hex_value</th>
        <th>status</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
<?php
foreach ($d as $data) {
?>
<tr align="center">
    <td><?php echo $data['id'];?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['hex_value'];?></td>
    <td><?php echo $data['status'];?></td>
    <td><?php echo $data['created_at'];?></td>
    <td><?php echo $data['updated_at'];?></td>
</tr>
<?php 
}
}
?>
</table>