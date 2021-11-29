<?php

$ipk = 2.5;

if   ($ipk >= 0 &&  $ipk < 2){
    echo "ipk Anda $ipk<br>";
    echo "GRADE E , Maaf Anda Harus Mengulang";
}else if ($ipk >= 2 && $ipk < 2.3 ) {
    echo "ipk Anda $ipk<br>";
    echo "GRADE D , Maaf Anda Harus Memperbaiki Mata Kuliah";
} else if ($ipk >= 2.3 && $ipk < 2.6) {
    echo "ipk Anda $ipk<br>";
    echo " GRADE C , Mau Memperbaiki Boleh Juga Tidak Juga Tidak";
    echo "GRADE B ,Mata Kuliah Anda Baik";
} else if ($ipk >= 2.6 && $ipk < 3) {
    echo "ipk Anda $ipk<br>";
    echo "GRADE B ,Mata Kuliah Anda Baik";
} else if ($ipk >= 3 && $ipk < 4) {
    echo "ipk Anda $ipk<br>";
    echo "GRADE A , Mata Kuliah Anda Super";
} else {
    echo "System Anda Eror";    
}
?>