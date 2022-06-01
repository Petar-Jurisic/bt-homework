<!DOCTYPE html>
<html lang="eng">
    <head>
        <?php include './class.php' ?>
        <title>Index</title>
    </head>
    <body>

<?php

/* 

Zadatak 19

*/

$contact1 = new Contact();
$contact1->setPhone("123-456");
$contact1->setEmail("pjurisic@gmail.com");

$contact2 = new Contact();
$contact2->setPhone("555-111");
$contact2->setEmail("pjurisic@proton.com");

if ($contact1->contains("pjurisic"))
    echo "Prvi kontakt sadrzi 'pjurisic'!" . "<br>";
else
    echo "Prvi kontakt NE sadrzi 'pjurisic'!" . "<br>";

if ($contact1->contains("stipe"))
    echo "Prvi kontakt sadrzi 'stipe'!" . "<br>";
else
    echo "Prvi kontakt NE sadrzi 'stipe'!" . "<br>";

$kontaktLista = new contactList();
$kontaktLista->addContact($contact1);
$kontaktLista->addContact($contact2);
$kontaktLista->listAllContacts();

?>

    </body>
</html>
