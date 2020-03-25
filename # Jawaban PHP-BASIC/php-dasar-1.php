<?php
$nilai = '72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86';
$nilaiarr = explode(' ', $nilai);

$average = array_sum($nilaiarr) / count($nilaiarr);
$max = max($nilaiarr);
$min = min($nilaiarr);

echo "Nilai Rata-Rata = $average </br>";
echo "Nilai Tertinggi = $max </br>";
echo "Nilai Terendah  = $min";
