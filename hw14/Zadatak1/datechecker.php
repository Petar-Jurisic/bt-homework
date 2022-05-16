<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
    </head> 
    <body style="background-image: url('./calendar.png'); background-repeat: no-repeat;background-attachment: fixed; background-size: cover;">
    <form style="width: 50vw; margin-left: 25vw; height: 50vw; margin-top: 10vw;">
    <fieldset style="background-image: linear-gradient(#53475b45,#F8521d35); opacity: 0.8; border-width:10px; width:600px; border-color: rgb(109, 105, 109); padding-left: 6vw;">
            <legend><font size="5" font color=darkgreen>Results</font></legend>


<?php

$d = $_GET['day'];
$m = $_GET['month'];
$y = $_GET['year'];
$flag = true;

if(!is_numeric($y)) {
    $flag = false;
}
else {
    if(!is_int((int)($y))) {
    $flag = false;
    }
}

if ($y<1910) {
    $flag = false;
}

if (empty($_GET['day'])) {
    die ("Please enter day!");
}

if (empty($_GET['month'])) {
    die ("Please enter month!");
}

if (empty($_GET['year'])) {
    die ("Please enter year!");
}

switch ($m) {

    case 2:
        if ($y%4 !== 0) {
            if ($d<1 || $d>28) {
                $flag = false;
            }
            else if ($y%4 == 0) {
                if ($d<1 || $d>29) {
                $flag = false;
            }
        }
    }
        break;
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        if ($d<1 || $d>31) {
            $flag = false;
        }
        break;

    case 4:
    case 6:
    case 9:
    case 11:
        if ($d<1 || $d>30) {
            $flag = false;
        }
        break;

    default:
            $flag = false;
        break;
}

$validDate = "<font size=6px font color=green>The date is valid!</font>";
$invalidDate = "<font size=6px font color=brick>The date is <u>NOT</u> valid!</font>";

if ($flag) {
    echo $validDate;
}
else echo $invalidDate;
?>
    </body>
</html>