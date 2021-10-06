<?php
require_once __DIR__ . '/User.php';

class Vip extends User {

    private $vip;

    public function __construct($_name, $_surname, $_address, $_card, $_vip = 1) {
        $this->vip = $_vip;
        parent::__construct($_name, $_surname, $_address, $_card);
    }

    protected function setDiscount(){
        if ($this->vip = 1){
            $this->discount = 30;
        }
            else {
                $this->discount = 0;
            }
        }
    }
