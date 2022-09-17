<?php

class Xiaomi extends Smartphone implements Screenshot {

    protected $version;

    public function __contruct($tipe) {
        parent::__construct($tipe);
    }

    public function UI() {
       return __CLASS__ ." MIUI";

    }
    
    public function capture() {
        return "Tekan tombol power + volume down";
    }

    public function setUIVersion($version) {
        return  $this->merk . " " . $this->tipe . " MIUI " .  " " . $this->version = $version;
    }


}


?>