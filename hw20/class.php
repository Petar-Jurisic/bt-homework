<?php

class Contact {
    protected $phone;
    protected $email;

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    } 

    public function contains($text) {
    	if (str_contains($this->email, $text))
           return true;
	if (str_contains($this->phone, $text))
	   return true;
	return false;
    }

    public function displayMe() {
	return $this->phone . " " . $this->email; 
    }
}

class ContactList extends Contact {
    protected $contacts = array();

    public function addContact($contact) {
	if ($contact instanceof Contact) {
	    array_push($this->contacts, $contact);
	}
    }
    
    public function listAllContacts() {
	foreach ($this->contacts as $contact) {
	    echo $contact->phone . " " . $contact->email . "<br>"; 
	}
    }
}

class CustomerContact extends Contact {
    protected $firstName;
    protected $lastName;

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function displayMe() {
        $contactInfo = parent::displayMe(); 
	return $this->firstName . " " . $this->lastName . " " . $contactInfo . "<br>";
    }
}

class BusinessContact extends Contact {
    protected $address;
    protected $companyName;

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }

    public function getCompanyName() {
        return $this->companyName;
    }

    public function displayMe() {
        $contactInfo = parent::displayMe(); 
	return $this->companyName . " " . $this->address . " " . $contactInfo . "<br>";
    }
}


?>
