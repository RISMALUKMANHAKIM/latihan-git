<?php
$helm = true;
$stnk = true;
$sim = false;

if ($helm == true && $stnk == false) {
    echo "kami cek perlengkapan surat stnk & simnya";
} else if ($helm == true && $stnk == true) {
    echo "Boleh kami Cek Simnya";
} else if ($helm == false && $stnk == true) {
    echo "Lanjutkan Perjalanan Anda";
} else {
    echo "Anda Saya Tilang";
}
