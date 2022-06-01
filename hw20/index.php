<!DOCTYPE html>
<html lang="eng">
    <head>
        <?php include './class.php' ?>
        <title>Index</title>
    </head>
    <body>

<?php

/* 

Zadatak 20

*/

$customer1 = new CustomerContact();
$customer1->setPhone("222-333");
$customer1->setEmail("jovan.memedovic@gmail.com");
$customer1->setFirstName("Jovan");
$customer1->setLastName("Memedovic");
echo $customer1->displayMe();

$business1 = new BusinessContact();
$business1->setPhone("111-111");
$business1->setEmail("google@gmail.com");
$business1->setCompanyName("Google Company");
$business1->setAddress("Palo Alto 21");
echo $business1->displayMe();

echo "Kontakt lista: " . "<br>";
$kontaktLista = new contactList();
$kontaktLista->addContact($customer1);
$kontaktLista->addContact($business1);
$kontaktLista->listAllContacts();

?>

    </body>
</html>
