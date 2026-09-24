<?php

class Agenda {
    private $contacts;

    function __construct() {
        $this->contacts = array();
    }
}

class Contact {
    private $name;
    private $phone;
    private $mail;


    public function __construct($name, $phone, $mail)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->mail = $mail;
    }

}

public function saveContact(Agenda $agenda, Contact $contact) {

}



