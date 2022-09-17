<?php

class Samsung extends Smartphone implements Screenshot {

    protected $version;

    public function __contruct($tipe) {
        parent::__construct($tipe);
    }

    public function UI() {
       return __CLASS__ ." OneUI";

    }
    
    public function capture() {
        return "Tekan tombol power + volume up";
    }



}


?>