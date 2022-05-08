<?php
$message = "";
if(isset($_POST['SubmitButton'])){ 
  $n = $_POST['n'];
  $c = ($n*($n+1))/2;
  $message = "<br><br>" . "The sum of all natural numbers up to $n is: " . $c;
}    

?>

<html>
<body>    
<form action="" method="post">

  <input type="number" name="n" min="0" required/>
  <input type="submit" name="SubmitButton" value="Submit"/>
  <?php echo $message; ?>
</form>    
</body>
</html>
