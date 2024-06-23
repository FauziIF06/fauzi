<?php



// // Membuat Array

// // Array numerik
// $dataNumerik = array(1, 2, 3, 4, 5);

// // Array Asosiatif
// $dataAsosiatif = array(
//     "nama" => "Fauzi",
//     "kelas" => "10",
//     "umur" => "17"
// );

// // Array Multidimensi
// $dataMultidimensi = array(
//     array("Fauzi", 17, "Senin"),
//     array("Ani", 17, "Selasa"),
//     array("Bagus", 17, "Rabu")
// );

// // Array Berisi Array
// $dataBerisiArray = array(
//     array("Fauzi", 17, "Senin"),
//     array("Ani", 17, "Selasa"),
//     array("Bagus", 17, "Rabu")
// );

// // Array Berisi Objek
// $dataBerisiObjek = array(
//     new stdClass(),
//     new stdClass(),
//     new stdClass()
// );

// // Array Berisi Mixed
// $dataBerisiMixed = array(
//     "string",
//     1,
//     true,
//     null,
//     array(),
//     new stdClass()
// );


// // echo json_encode($dataNumerik, JSON_PRETTY_PRINT);//
// // echo json_encode($dataAsosiatif, JSON_PRETTY_PRINT);//
// // echo json_encode($dataMultidimensi, JSON_PRETTY_PRINT);//
// echo json_encode($dataBerisiArray, JSON_PRETTY_PRINT);
// echo json_encode($dataBerisiObjek, JSON_PRETTY_PRINT);
// echo json_encode($dataBerisiMixed, JSON_PRETTY_PRINT);


// array numerik
$dataNumerik = [1, 2, 3, 4, 5];
echo json_encode($dataNumerik, JSON_PRETTY_PRINT);

// array asosiatif
$dataAsosiatif = [
    "nama" => "Fauzi",
    "kelas" => "10",
    "umur" => "17"
];
echo json_encode($dataAsosiatif, JSON_PRETTY_PRINT);

// array multidimensi
$dataMultidimensi = [
    ["Fauzi", 17, "Senin"],
    ["Ani", 17, "Selasa"],
    ["Bagus", 17, "Rabu"]
];
echo json_encode($dataMultidimensi, JSON_PRETTY_PRINT);

// array duadimensi
$dataDuadimensi = [
    ["Fauzi", 17],
    ["Ani", 17]
];
echo json_encode($dataDuadimensi, JSON_PRETTY_PRINT);

// array kosong
$dataKosong = [];
echo json_encode($dataKosong, JSON_PRETTY_PRINT);



// contoh array merge
$dataA = [1, 2, 3];
$dataB = [4, 5, 6];
$dataMerge = array_merge($dataA, $dataB);
var_dump($dataMerge);


