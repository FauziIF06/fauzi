<?php 


$data = [
    1 => "polan",
    2 => "polin",
    3 => "polun",
    4 => "polen",
    5 => "polon",
];


// menggunakan for
echo "<h1>Menggunakan For</h1>";
for ($i=1; $i <=count($data); $i++) { 
    echo $data[$i] ."<br>";
}

// menggunakan while

echo "<h1>Menggunakan For</h1>";
$i = 1;
while ($i <= count($data)) {
    echo $data[$i] ."<br>";
    $i++;

}

// menggunakan foreach

echo "<h1>Menggunakan For</h1>";
$i = 0;
foreach ($data as $key => $value) {
    echo $data[$key] ."<br>";
    $i++;
}