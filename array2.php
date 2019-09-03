<?php
$array = array('Saya <br>', 10);
$aso = [
    [
        'Nama' => 'Ari Andriana',
        'Kelas' => 'Informatika 2'
    ],
    [
        'Nama' => 'Agung Wahyudi',
        'Kelas' => 'Informatika 1'
    ]
];

foreach ($aso as $value) {
    echo $value["Nama"] . " : ";
    echo $value["Kelas"]."<br>";
}
echo "<hr>";
$countaso = count($aso);
for ($i=0; $i < $countaso; $i++) { 
    echo $aso[$i]["Nama"]. " : ";
    echo $aso[$i]["Kelas"]. "<br>";
}
?>