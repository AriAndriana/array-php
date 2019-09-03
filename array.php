<?php
$a = array('Ahmad', 19, true, 3.19, 'Dadang');

//menampilkan array dengan echo
echo "Array menggunakan Echo <br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";

//menampilkan array dengan menggunakan Looping for
echo "<br>";
echo "Array Menggunakan Looping For <br>";
for ($i=0; $i < count($a) ; $i++) { 
    echo "Array - ". $a[$i] . "<br>";
}
echo "<br>";

//menampilkan array dengan Looping Foreach
echo "<br>";
echo "Array menggunakan Looping Foreach <br>";
foreach ($a as $index => $value) {
    echo "Array - ". $index. "&nbsp; -> " . $value . "<br>";
}
?>