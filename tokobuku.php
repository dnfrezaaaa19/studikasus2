<?php
$nama_pembeli = "Budi Santoso";
$judul_buku   = "Dasar-Dasar Pemrograman Web";
$jumlah_buku  = 2;
$harga        = 85000;
$member       = true;

// hitung total awal
$total_awal = $jumlah_buku * $harga; 

if($member == true){
    $diskon = $total_awal * 0.1; 
}else{
    $diskon = 0; 
}

$total_bayar = $total_awal - $diskon;

echo "=====================================\n";
echo "         TOKO BUKU CAHAYA ILMU\n";
echo "=====================================\n";
echo "Nama Pembeli  : $nama_pembeli\n";
echo "Judul Buku    : $judul_buku\n";
echo "Jumlah Buku   : $jumlah_buku\n";
echo "Harga Satuan  : Rp " . number_format($harga,0,',','.') . "\n";
echo "-------------------------------------\n";
echo "Total Awal    : Rp " . number_format($total_awal,0,',','.') . "\n";
echo "Diskon        : Rp " . number_format($diskon,0,',','.') . "\n";
echo "=====================================\n";
echo "TOTAL BAYAR   : Rp " . number_format($total_bayar,0,',','.') . "\n";
echo "=====================================\n";
echo "Status Member : " . ($member ? "YA" : "TIDAK") . "\n";
echo "TERIMAKASIH TELAH MEMBELI DI CAHAYA ILMU!!\n";
?>