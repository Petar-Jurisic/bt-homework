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

}

class ContactList {
    protected $contacts = array();

    
}

?>