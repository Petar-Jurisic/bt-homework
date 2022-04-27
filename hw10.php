<html>

<head>
    <title>Homework 10</title>
</head>

<body>
    <?php
    echo '<span style="font-size: 24px; color:purple">' . "<u>" . "Zadatak 1" . "</u>" . '</span>' . "<br>";
    $a = 200;
    $b = 80;
    echo ("a = " . $a) . "<br>";
    echo ("b = " . $b) . "<br>";
    echo ("Zbir a i b je: " . ($a + $b)) . "<br>";
    echo ("Proizvod a i b je: " . ($a * $b)) . "<br>";
    echo ("Razlika a i b je: " . ($a - $b)) . "<br>";
    echo ("Količnik a i b je: " . ($a / $b)) . "<br>" . "<br>";

    echo '<span style="font-size: 24px; color:purple">' . "<u>" . "Zadatak 2" . "</u>" . '</span>' . "<br>" ;
    $c = rand(0, 6);
    switch ($c) {
        case "0":
            $c = "nedelja";
            break;
        case "1":
            $c = "ponedeljak";
            break;
        case "2":
            $c = "utorak";
            break;
        case "3":
            $c = "sreda";
            break;
        case "4":
            $c = "četvrtak";
            break;
        case "5":
            $c = "petak";
            break;
        case "6":
            $c = "subota";
            break;
    }
    echo ("Danas je" . " " . $c . "!") . "<br>" . "<br>";

    echo '<span style="font-size: 24px; color:purple">' . "<u>" . "Zadatak 3" . "</u>" . '</span>' . "<br>";
    $d = rand(0, 10);
    $e = rand(0, 10);
    $f = rand(0, 10);
    echo "Zbir brojeva " . $d . ", " . $e . " i " . $f . " je " . ($d + $e + $f) . ".";
    ?>


</body>
    <!-- https://github.com/Petar-Jurisic/bt-homework.git -->
</html>