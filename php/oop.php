<?php


class kalkulator {
    
    function tambah($a, $b) {
        $c = $a + $b;
        echo $c;
    }
    function kurang($a, $b) {
        $c = $a - $b;
        echo $c;
    }
    function kali($a, $b) {
        $c = $a * $b;
        echo $c;
    }
    function bagi($a, $b) {
        $c = $a / $b;
        echo $c;
    }
    function pangkat($a, $b) {
        $c = pow($a, $b);
        echo $c;
    }
}


$kal = new kalkulator();
echo"<h1>Fungsi tambah dari class kalkulator</h1>";
$kal->tambah(5,5);
echo"<h1>Fungsi kurang dari class kalkulator</h1>";
$kal->kurang(5,5);
echo"<h1>Fungsi kali dari class kalkulator</h1>";
$kal->kali(5,5);
echo"<h1>Fungsi bagi dari class kalkulator</h1>";
$kal->bagi(5,5);
echo"<h1>Fungsi pangkat dari class kalkulator</h1>";
$kal->pangkat(5,5);