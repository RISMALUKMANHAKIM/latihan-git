<?php

$gk = 4500000;
$pajak = 0.025;
$bpjs = 200000;
$infak = 50000;
$transport = 240000;

// gaji Haddad sesudah di potong pajak
$tpajak = $gk * $pajak;
$gaji = $gk - $tpajak;

// gaji Haddad sesudah di potong biaya bpjs dan infak
$gaji1 = $gaji - $bpjs - $infak;

// gaji Haddad sesudah di tambah uang transport
$gaji2 = $gaji1 + $transport;
echo "Sisa gaji Haddad yang diterima : $gaji2";
