
<?php
echo "<p style=color:purple><u>Zadatak 1</u></p>";

$emailArray = array("pera@fat.com", "milka.co.yu", "steva@grr.la" ,"sonja+jase+konja", "danilo@yahoo.com", "marica*businessmail,net", "ivica-gmail-com", "sanja@nesto.da", "vanja@spam4.me", "mira");


/* Built-in function:

function filterMail($array) {
	foreach($array as $email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$filtered_emails[] = $email;
			echo $email . "<br>";
		}
	}
}
	print_r(filterMail($emailArray));

echo "<br><hr>";
*/

// Inventing hot water:

function checkEmail($array) {
	foreach($array as $email){
	$find1 = strpos($email, '@');
	$find2 = strpos($email, '.');

	if ($find1 !== false && $find2 !== false && $find2 > $find1) {
	$filtered_emails[] = $email;
	echo $email . "<br>";
 }
}
}
	print_r(checkEmail($emailArray));

echo "<br><hr>";
?>

<?php
echo "<p style=color:MediumTurquoise><u>Zadatak 2</u></p>";

$intArray = [2, 4, 5, 11, 23, 35, 44];

function calculate($array, $char) {
	$result = 0;
	foreach($array as $integer){

	switch($char){
	case "*":
		$result=array_product($array);
	break;
  
	case "+";	
		$result = $result + $integer;
	break;

	case "-":
		$result = $result - $integer;
	break;
	
	case "/";
		$result = 1;
		$result = sprintf("%.2f",($result / $integer));
	break;

	default:
		$result = "Your operator is invalid!";
	}	
}
	return $result;
}

echo (calculate($intArray,'+'));

echo "<br><hr>";
?>



<?php
echo "<p style=color:DarkGoldenRod><u>Zadatak 3</u></p>";

$associativeArray = array("id"=>"EUROPETROL", "Evro Dizel"=>"199.9", "Expert Dizel"=>"211.9", "BMB 95"=>"180", "Expert BMB"=>"201.9", "TNG"=>"108,9");

function checkKey($array,$y) {
	if (isset($array[$y])) {
		echo "Yes, there is key named " . '"' . $y . '"' . " in the array.";
	}
	else echo "No, there is no key named " . '"' . $y . '"' . " in the array." . "<br>";
 }

	print_r(checkKey($associativeArray, "TNG"));

	echo "<br><hr>";
?>