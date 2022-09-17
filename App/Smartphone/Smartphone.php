<?php

abstract class Smartphone {
    protected   $merk,
                $tipe,
                $volume;

    
    public function __construct($merk = "merk", $tipe = "tipe", $volume = 0) {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->volume = $volume;
        
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function nyalakan() {
        return "Menyalakan {$this->merk} {$this->tipe}";
    }

    public function matikan() {
        return "Mematikan {$this->merk} {$this->tipe}";
    }

    public function volumeUp($volume) {

        $str = $this->volume + $volume;
           
        if($str <= 5) {

            return $str;

        }else{

            return "Maksimal Volume 5!";
        }
        

    }

    public function volumeDown($volume) {
        
        $str = $this->volume - $volume;
           
        if($str >= 0) {

            return $str;

        }else{

            return "Minimal Volume 0!";
        }
    }

    abstract public function UI();

    public function getter() {
        return "{$this->merk}, {$this->tipe}, {$this->volume}";
    }
}


?>