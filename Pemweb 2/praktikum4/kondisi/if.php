<?php 
/**
 * if adalah fungsi untuk melakukan perulangan
 * else adalah fungsi untuk melakukan menjalankan hasil kondisi jika kondisi tidak terpenuhi 
 *else if adalag fungsi untuk melakukan perngecekan kondisi jika kondisi sebelumnya tidak terpenuhi
 */
$nilai = 99;
if ($nilai >= 80 or $nilai < 95) {
echo 'Nilai anda' . $nilai . 'dan anda lulus';
} elseif ($nilai >= 95) {
    echo 'Nilai anda'. $nilai . 'dan anda lulus dan anda keren !';
}else{
    echo 'Nilai anda '. $nilai .'dan anda tidak lulus';
}
?>