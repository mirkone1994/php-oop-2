<?php

class User {
    protected $name;
    protected $surname;
    protected $address;
    protected $card;
    
    public function __construct($_name, $_surname, $_address, $_card){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->address = $_address;
        $this->card = $_card;
    }

    public function getFullName(){
        return $this->name . ' ' . $this->surname . ' '; 
    }

    public function getAddress(){
        return $this->address; 
    }
}