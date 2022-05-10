<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
    </head> 
    <body style="background-image: url('../Pools.png'); background-repeat: no-repeat;background-attachment: fixed; background-size: cover;">
    <form style="width: 50vw; margin-left: 25vw; height: 50vw; margin-top: 10vw;">
    <fieldset style="background-image: linear-gradient(#53475b45,#F8521d35); opacity: 0.8; border-width:10px; width:600px; border-color: rgb(109, 105, 109); padding-left: 6vw;">
            <legend><font size="5" font color=darkgreen>Results</font></legend>


<?php

$a1 = $_GET['pool1length'];
$b1 = $_GET['pool1width'];
$r = $_GET['pool2radius'];
$a2 = $_GET['pool3length'];
$b2 = $_GET['pool3width'];

if (isset($_GET)) {

function pool1area($x, $y) {
    return (($x-($y/2))*$y)+(((($y/2)**2)*M_PI)/2);

}

function pool2area($x) {
    return $x**2*M_PI;
}

function pool3area($x, $y) {
    return $x*$y;
}

function allpoolsarea($x, $y, $z) {
    return $x+$y+$z;
}

echo "<font size=4px font color=brick>Pool No.1 area is <span style=color:blueviolet><u>" . round(pool1area($a1, $b1),2) . "</u></span> square meters. <br><br></font>";
echo "<font size=4px font color=brick>Pool No.2 area is <span style=color:blueviolet><u>" . round(pool2area($r),2) . "</u></span>  square meters. <br><br><font/>";
echo "<font size=4px font color=brick>Pool No.3 area is <span style=color:blueviolet><u>" . round(pool3area($a2, $b2),2) . "</u></span>  square meters. <br><br></font>";
echo "<font size=4px font color=brick>The area of all three pools is <span style=color:blueviolet><u>" . round(allpoolsarea(pool1area($a1, $b1), pool2area($r), pool3area($a2, $b2)),2) . "</u></span>  square meters. <br><br></font>";
}

else {
    echo "Your input is invalid. Please try again.";
}
?>
    </body>
</html>