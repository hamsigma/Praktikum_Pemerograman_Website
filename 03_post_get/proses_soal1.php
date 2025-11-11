<html>
<head>
    <title>Hasil Perhitungan Saldo Tabungan</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Tabungan Bank X</h1>
    <?php
    // 1. Mengambil data dari form
    $saldoAwal = $_POST['saldo_awal'];
    $bungaPersen = $_POST['bunga'];
    $bulan = $_POST['bulan'];

    // 2. Mengubah bunga dari persen ke desimal
    // (misal: 0.25% menjadi 0.0025)
    $bunga = $bungaPersen / 100;
    
    // 3. Hitung bunga total selama $bulan
    // (Sesuai soal, bunga dihitung dari saldo awal, bukan bunga majemuk)
    $totalBunga = $saldoAwal * $bunga * $bulan;
    
    // 4. Hitung saldo akhir
    $saldoAkhir = $saldoAwal + $totalBunga;
    
    // 5. Menampilkan hasil
    echo "<p>Saldo Awal Anda: Rp. ".number_format($saldoAwal)."</p>";
    echo "<p>Bunga per bulan: ".$bungaPersen." %</p>";
    echo "<p>Lama menabung: ".$bulan." bulan</p>";
    echo "<hr>";
    echo "<p><b>Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".number_format($saldoAkhir).",-</b></p>";
    ?>
</body>
</html>