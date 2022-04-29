<?php


$ime = $_GET['first_name'];
$prezime = $_GET['last_name'];
$username = $_GET['username'];
$email = $_GET['email'];
$lozinka = $_GET['password'];
$retype = $_GET["retype"];
$myfile = $_GET["myfile"];

if(empty($ime) || empty($prezime) || empty($username) || empty($email) || empty($lozinka) || empty($retype) || empty($myfile) || ($lozinka != $retype))  {
    echo ("Vas unos ima gresku." . "<br>" . "Molim pokusajte ponovo.");
}
else {


    $pol = $_GET['pol'];
    if ($pol == "m") {
        echo 'Postovani ';
    } else if ($pol == "f") {
        echo 'Postovana ';
    } else
        echo 'Postovani/Postovana ';




    if (isset($_GET["HTML"])) {
        $html = $_GET['HTML'];
    } else $html = null;
    if (isset($_GET["CSS"])) {
        $css = $_GET['CSS'];
    } else $css = null;
    if (isset($_GET["PHP"])) {
        $php = $_GET['PHP'];
    } else $php = null;
    if (isset($_GET["JAVA"])) {
        $java = $_GET['JAVA'];
    } else $java = null;
    $lista_kurseva = [$html, $css, $php, $java];
    echo ($ime) . " " . ($prezime) . "," . "<br>";
    echo 'Uspesno ste se registrovali na nasem sajtu.' . "<br>";
    echo 'Vas username je: ' . " " . $username . "<br>";
    echo 'Vasa lozinka je: ' . " " . $lozinka . "<br>";
    echo 'Vasa e-adresa je: ' . " " . $email . "<br>";

    $odabrano = implode($lista_kurseva);
    if (empty($odabrano)) {
        echo "Nemate odabrane kurseve.";
    } 
    
    else {
        $odabrani_kursevi = implode(" ",$lista_kurseva);
        echo "Vasi odabrani kursevi su: " . $odabrani_kursevi . "<br>";
         
}
}

    

?>