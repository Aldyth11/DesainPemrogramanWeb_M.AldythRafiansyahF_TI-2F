<?php
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai_siswa);

$nilai_terendah = array_slice($nilai_siswa, 0, 2);
$nilai_tertinggi = array_slice($nilai_siswa, -2);

$nilai_dihitung = array_slice($nilai_siswa, 2, -2);

$total_nilai_normal = array_sum($nilai_dihitung);
$jumlah_data = count($nilai_dihitung);
$rata_rata = $total_nilai_normal / $jumlah_data;

echo "
    <table border=\"1\">
        <tr>
            <td>Nilai keseluruhan</td>";
            foreach($nilai_siswa as $nilai) {
                echo "<td>$nilai</td>";
            }
        echo "</tr>
        <tr>
            <td>Nilai tertinggi</td>";
            foreach ($nilai_tertinggi as $nilai) {
                echo "<td>$nilai</td>";
            }
        echo "</tr>
        <tr>
            <td>Nilai terendah</td>";
            foreach ($nilai_terendah as $nilai) {
                echo "<td>$nilai</td>";
            }
        echo "</tr>
        <tr>
            <td>Total nilai normal</td>
            <td>$total_nilai_normal</td>
        </tr>
        <tr>
            <td>Nilai rata-rata normal</td>
            <td>$rata_rata</td>
        </tr>
    </table>";
?>