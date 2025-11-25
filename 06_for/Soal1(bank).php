<html>
<head>
    <title>Kalkulator Saldo Bank</title>
</head>
<body>
    <h2>Kalkulator Saldo Bank</h2>
    
    <!-- Form Input -->
    <form method="POST">
        <label>Saldo Awal (Rp): </label>
        <input type="number" name="saldo_awal" value="<?php echo isset($_POST['saldo_awal']) ? $_POST['saldo_awal'] : 1000000; ?>" required><br><br>
        
        <label>Jangka Waktu (Bulan): </label>
        <input type="number" name="bulan" value="<?php echo isset($_POST['bulan']) ? $_POST['bulan'] : ''; ?>" min="1" required><br><br>
        
        <input type="submit" value="Hitung Saldo">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $saldo_awal = $_POST['saldo_awal'];
        $bulan = $_POST['bulan'];
        $saldo = $saldo_awal;
        
        echo "<h3>Perhitungan Detail:</h3>";
        echo "<p>Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "</p>";
        
        // Simulasi perhitungan per bulan
        for ($i = 1; $i <= $bulan; $i++) {
            // Kurangi biaya admin
            $saldo = $saldo - 9000;
            
            // Tentukan suku bunga
            if ($saldo < 1100000) {
                $bunga_tahunan = 0.03; // 3%
                $persen = "3%";
            } else {
                $bunga_tahunan = 0.04; // 4%
                $persen = "4%";
            }
            
            // Hitung bunga bulanan
            $bunga_bulanan = ($saldo * $bunga_tahunan) / 12;
            $saldo = $saldo + $bunga_bulanan;
            
            echo "<p>Bulan $i: Saldo = Rp " . number_format($saldo, 0, ',', '.') . " (Bunga: $persen)</p>";
        }
        
        echo "<h3>Saldo Akhir setelah $bulan bulan: Rp " . number_format($saldo, 0, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>