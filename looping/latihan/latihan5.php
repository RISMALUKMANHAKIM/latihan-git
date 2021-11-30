<?php

$siswa = [
    ['nama'=> 'Risma','jk'=> 'laki-laki','umur'=>  17],
    ['nama'=> 'baban','jk' => 'laki-laki','umur' => 17],
    ['nama'=> 'delis','jk' => 'perempuan','umur' => 16],
];

foreach ($siswa as $value){
    echo "Nama           :" . $value['nama'] . "<br>";
    echo "Jenis Kelamin  :" . $value['jk'] . "<br>";
    echo "Umur           :" . $value['umur'];
    echo "<hr>";
}
    
?>