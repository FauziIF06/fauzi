<?php  

$nilai = 50;

    // if  tunggal
    //if($nilai>50){
    //     $a = "lulus";}
    // else {
    //     $a = "gagal";
    // }


    // if ganda
    // if ($nilai > 99) {

    //     $a = "A"; }
    //     elseif ($nilai < 75) {
    //         $a = "B";
    //     } elseif ($nilai > 60) {
    //         $a = "C";
    //     } elseif ($nilai > 50)
    //         $a = "D";
    //      else {

    //     }
        
        
        
        switch ($nilai) {
            case ($nilai > 90);
            $a = "A";
            break;
            case ($nilai > 70); 
            $a = "B";
            break;
            case ($nilai > 60);
            $a = "C";
            break;
            case ($nilai > 50);
            $a = "D";
            break;
            default:
            $a = "E";
            break;
        }
        echo $a;

