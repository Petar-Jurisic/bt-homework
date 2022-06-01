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

?>
