<html>
<head>
    <title>Perhitungan Saldo Tabungan Bank</title>
</head>
<body>
    <h1>Perhitungan Saldo Tabungan Bank X</h1>
    <?php
    $saldoAwal = 1000000;
    $bunga = 0.0025;  // 0,25% = 0.0025
    $bulan = 11;
    
    // Hitung bunga total selama 11 bulan
    $totalBunga = $saldoAwal * $bunga * $bulan;
    
    // Hitung saldo akhir
    $saldoAkhir = $saldoAwal + $totalBunga;
    
    echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.",-";
    ?>
</body>
</html>


<!-- Penjelasan Perhitungan:
Formula yang digunakan:
Bunga per bulan = Saldo Awal × 0,25%
Total bunga 11 bulan = Saldo Awal × 0,25% × 11
Saldo Akhir = Saldo Awal + Total Bunga
Perhitungan:
Saldo Awal: Rp. 1.000.000
Bunga per bulan: 1.000.000 × 0,0025 = Rp. 2.500
Total bunga 11 bulan: 2.500 × 11 = Rp. 27.500
Saldo Akhir: 1.000.000 + 27.500 = Rp. 1.027.500 -->
<!-- Hasil output : Saldo akhir setelah 11 bulan adalah : Rp. 1027500,- -->


<!-- Catatan: Soal ini menggunakan perhitungan bunga sederhana (simple interest), bukan bunga majemuk (compound interest), karena bunga dihitung dari saldo awal yang tetap setiap bulannya. -->