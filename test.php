<?php
class Coba {
    public function tes() {
        echo "Test";
    }
}

$namaClass = "Coba";
$objek = new $namaClass;
$objek->tes();
var_dump($objek);