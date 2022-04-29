<html>

<head>
    <title>Homework 10-11</title>
</head>

<body>
    <?php
    echo '<span style="font-size: 24px; color:darkseagreen">' . "<u>" . "Zadatak 1" . "</u>" . '</span>' . "<br>";
    
	$a = 200;
    $b = 80;
	echo ("a = " . $a) . "<br>";
    echo ("b = " . $b) . "<br>";
	echo ("Zbir a i b je: " . bcadd($a, $b)) . "<br>";
	echo ("Proizvod a i b je: " . bcmul($a, $b)) . "<br>";
	echo ("Razlika a i b je: " . bcsub($a, $b)) . "<br>";
	echo ("Količnik a i b je: " . bcdiv($a, $b)) . "<br>" . "<br>";
	
    echo '<span style="font-size: 24px; color:darkseagreen">' . "<u>" . "Zadatak 2" . "</u>" . '</span>' . "<br>" ;
    $c = rand(0, 6);
	$days = ["nedelja", "ponedeljak", "utorak", "sreda", "četvrtak", "petak", "subota"];
	echo ("Danas je" . " " . $days[$c] . "!") . "<br>" . "<br>";
	
    echo '<span style="font-size: 24px; color:darkseagreen">' . "<u>" . "Zadatak 3" . "</u>" . '</span>' . "<br>";
    $d = rand(0, 10);
    $e = rand(0, 10);
    $f = rand(0, 10);
	$niz = [$d, $e, $f];
    echo "Zbir brojeva " . $d . ", " . $e . " i " . $f . " je " . array_sum($niz) . ".";
    ?>


</body>
    <!-- https://github.com/Petar-Jurisic/bt-homework.git -->
</html>