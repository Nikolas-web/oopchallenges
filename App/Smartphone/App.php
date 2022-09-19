<?php

// class App {
//     public $daftarHape = array();

//     public function tambahTipe(Smartphone $hp) {
//         $this->$daftarHape[] = $hp;
//     }

//     public function cetak() {
//         $str = "DAFTAR HP : <br> ";

//         foreach( $this->daftarHape as $hp) {
//             $str .= "- {$hp->getMerk()} {$hp->getTipe()} <br>";
//         }

//         return $str;
//     }
// }
class App {
    public $daftarHape = [];

    public function tambahTipe(Smartphone $produk) {
        $this->daftarHape[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR HAPE : <br> ";

        foreach( $this->daftarHape as $p) {
            $str .= "- {$p->getInfoHape()} <br>";
        }

        return $str;
    }
}
