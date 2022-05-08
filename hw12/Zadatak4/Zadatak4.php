<html>
<body>    
<form action="" method="post">

  <input style="width:20vw" type="number" name="snail" min="0" placeholder="Enter the snail's position in cm" required/>
  <input style="width:20vw" type="number" name="tree" min="0" placeholder="Enter the tree's height in cm" required/>
  <input type="submit" name="SubmitButton" value="Submit"/>
</form>    
</body>
</html>





<?php
$message = "";
if(isset($_POST['SubmitButton'])){ 

  
$snail = $_POST['snail'];
$tree = $_POST['tree'];
$counter = 1;
while($snail<$tree)
{
    $message = "<br><br>" . "Day " . $counter . ": "  . "<br>" . "The snail is at the height of: " . $snail . " cm." . "<br>" . "The tree is " . $tree . " cm tall." . "<br><br>";
    $snail=$snail+3;
    $tree++;
    $counter++;
    echo $message; 

}

echo "The snail climbed the tree in " . $counter . " days!";

}    

?>

