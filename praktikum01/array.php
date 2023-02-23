<?php
// Buat Array
$animals = ["Jerapah", "Hiu", "Anjing", "Serigala"];
echo $animals[1] . "<br>"; 
echo $animals[3] . "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat Array Asosiatif
$mahasiswa = ["nama"=>"Ayas", "jurusan"=>"SI", "semester"=>"2"];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "Key nya adalah" . $key . "Value:" . $value . "<br>";

}


// Buat Array Multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Nasrul", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][0]; [0][1]; [1][0]; [1][1]; [2][0]; [2][1];
?> 