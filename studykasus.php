<?php

<?php
echo "===== SISTEM PERHITUNGAN GAJI KARYAWAN =====\n";
echo "Pilih Jabatan\n";
echo "1. Manager\n";
echo "2. Supervisor\n";
echo "3. Staff\n";

echo "Masukan Pilihan 1-3: ";

$jabatan = trim(fgets(STDIN));

echo "Masukan jumlah jam kerja dalam satu bulan: ";
$jam_kerja = trim(fgets(STDIN));

switch ($jabatan){
    case 1:
        $gaji_pokok = 7000000;
        $nama_jabatan = "Manager";
        break;
    case 2:
        $gaji_pokok = 5000000;
        $nama_jabatan = "Supervisor";
        break;
    case 3:
        $gaji_pokok = 3000000;
        $nama_jabatan = "Staff";
        break;
    default :
        echo "pilihan tidak ada!";     
}

if($gaji_pokok <= 3000000){
    $pajak = 0.05 * $gaji_pokok;
}
elseif($gaji_pokok <= 5000000){
    $pajak = 0.10 * $gaji_pokok;
}
else{
    $pajak = 0.15 * $gaji_pokok;
}

if($jam_kerja > 200){
    $jam_lembur = $jam_kerja - 200;
    $bonus = $jam_lembur * 20000;
}
else{
    $bonus = 0;
}

$gaji_bersih = $gaji_pokok - $pajak + $bonus;
echo "\n===== SLIP GAJI KARYAWAN =====\n";
echo "Jabatan        : $nama_jabatan\n";
echo "Gaji Pokok     : Rp " . number_format($gaji_pokok, 0, ',', '.') . "\n";
echo "Pajak          : Rp " . number_format($pajak, 0, ',', '.') . "\n";
echo "Bonus          : Rp " . number_format($bonus, 0, ',', '.') . "\n";
echo "---------------------------------\n";
echo "Gaji Bersih    : Rp " . number_format($gaji_bersih, 0, ',', '.') . "\n";



