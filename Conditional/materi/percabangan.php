<?php
$nama = "budi";
$status ="Manager";
$keluarga = 5;
$perjam = 45;

echo " Nama Pekerja : " .$nama. " <br>";
echo " Status : " .$status. "<br>";

if($status == "Manager"){
    $gaji = 4500000;
    $lembur = 50000;
    $u_transport = 50000;
    echo "Gaji Pokok : ".$gaji;
}
else if($status == "Sekertaris"){
    $gaji = 3500000;
    $lembur = 45000;
    $u_transport = 35000;
    echo "Gaji Pokok : ".$gaji;
}
echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS :".$bpjs."<br>";

$pajak = 0.025 * $gaji;
echo "Pajak : ".$pajak."<br>";

echo "<hr>";

$total = $pajak +  $bpjs;
echo "Total Potongan : ".$total."<br>";

echo "<hr>";

$tunjangan = 0.1 * $gaji;
echo "Tunjangan  : ".$tunjangan."<br>";

$u_lembur = $perjam * $lembur;
echo "LEMBUR  : ".$u_lembur."<br>";

$transport = 24 * $u_transport;
echo " TRANPORTASI  : ".$transport."<br>";

echo "<hr>";

$bonus = $tunjangan + $u_lembur + $transport;
echo "BONUS : $bonus";

echo "<hr>";

$u_gaji = ($gaji - $total) + $bonus;
echo " GAJI BERSIH : $u_gaji";
?>