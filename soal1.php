<?php
 
// SOAL no 1
//
// Diket :
//   jumlah awal lovebird 6.969  
//   setiap 21 hari (menetas 1 lovebird, 11,1% mati)
//
// Ditanya :
//   setelah 441 hari berapa jumlah lovebird
//
// membagi $hari_2/$hari_1 = $kelipatan_hari (bulatkan kebawah)
// $persentase_hidup = (100-$persentase_mati)/100
// hitung total menetas = $kelipatan_hari*$jumlah_awal_lovebird*$persentase_hidup
// hitung jumlah akhir lovebird = $jumlah_awal_lovebird + $jumlah_lovebird_menetas
 
function populasi($jumlah_awal_lovebird, $hari_2, $hari_1, $persentase_mati)
{
    $kelipatan_hari   =  floor($hari_2 / $hari_1);
    $persentase_hidup = (100 - $persentase_mati) / 100;
 
    $jumlah_lovebird_menetas = floor($kelipatan_hari * $jumlah_awal_lovebird * $persentase_hidup);
    $jumlah_akhir_lovebird   = $jumlah_awal_lovebird + $jumlah_lovebird_menetas;
 
 
    return $jumlah_akhir_lovebird;
}
 
 
echo populasi(6969, 441, 21, 11.1);