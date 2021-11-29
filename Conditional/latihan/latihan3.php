<?php
$jurusan = "TKRO";
$kelas = "11 TKRO";

if($jurusan == "TKRO"){
        if($kelas == "11 TKRO"){
            echo "Ini Kelas 11 TKRO";
        }
        else if($kelas == "12 TKRO"){
            echo "Ini Kelas 12 TKRO";
        }
        else if($kelas == "12 TKRO"){
            echo "Ini Kelas 12 TKRO";
        }
        else {
            echo "Ini Bukan Kelas TKRO";
        }
}
else if($jurusan == "TBSM"){
    if($kelas == "11 TBSM"){
        echo "Ini Kelas 11 TBSM";
    }
    else if($kelas == "12 TBSM"){
        echo "Ini Kelas 12 TBSM";
    }
    else if($kelas == "12 TBSM"){
        echo "Ini Kelas 12 TBSM";
    }
    else {
        echo "Ini Bukan Kelas TBSM";
    }
} 
else if($jurusan == "RPL"){
    if($kelas == "11 RPL"){
        echo "Ini Kelas 11 RPL ";
    }
    else if($kelas == "12 RPL"){
        echo "Ini Kelas 12 RPL";
    }
    else if($kelas == "12 RPL"){
        echo "Ini Kelas 12 RPL";
    }
    else {
        echo "Ini Bukan Kelas TKRO";
    }
}   
else {
    echo "TIDAK ADA JURUSAN !";
}
?>