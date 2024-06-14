<?php
$nilai = 50;

if ($nilai >= 80.00 && $nilai <= 100.00) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade A";
} else if ($nilai >= 76.25 && $nilai < 80.00) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade A-";
} else if ($nilai >= 68.75 && $nilai < 76.25) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade B+";
} else if ($nilai >= 65.00 && $nilai < 68.75) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade B";
} else if ($nilai >= 62.50 && $nilai < 65.00) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade B-";
} else if ($nilai >= 57.50 && $nilai < 62.50) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade C+";
} else if ($nilai >= 55.00 && $nilai < 57.50) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade C";
} else if ($nilai >= 51.25 && $nilai < 55.00) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade C-";
} else if ($nilai >= 43.75 && $nilai < 51.25) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade D+";
} else if ($nilai >= 40.00 && $nilai < 43.75) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade D";
} else if ($nilai >= 0.00 && $nilai < 40.00) {
    echo "Nilai Anda $nilai, Anda Mendapatkan Grade E";
} else {
    echo "Nilai tidak valid.";
}
