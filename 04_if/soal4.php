<html>
<head>
    <title>Baca Bulan</title>
</head>
<body>
    <h1>Membaca Bulan</h1>
    
    <form method="post" action="">
        Nomor Bulan (1-12): <input type="text" name="bulan"><br><br>
        <input type="submit" name="submit" value="Tampilkan">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $bulan = $_POST['bulan'];
        
        switch($bulan) {
            case 1: $namaBulan = "Januari"; $hari = 31; break;
            case 2: $namaBulan = "Februari"; $hari = 28; break;
            case 3: $namaBulan = "Maret"; $hari = 31; break;
            case 4: $namaBulan = "April"; $hari = 30; break;
            case 5: $namaBulan = "Mei"; $hari = 31; break;
            case 6: $namaBulan = "Juni"; $hari = 30; break;
            case 7: $namaBulan = "Juli"; $hari = 31; break;
            case 8: $namaBulan = "Agustus"; $hari = 31; break;
            case 9: $namaBulan = "September"; $hari = 30; break;
            case 10: $namaBulan = "Oktober"; $hari = 31; break;
            case 11: $namaBulan = "November"; $hari = 30; break;
            case 12: $namaBulan = "Desember"; $hari = 31; break;
            default: $namaBulan = "Tidak Valid"; $hari = 0; break;
        }
        
        echo "<h3>Hasil:</h3>";
        if ($bulan >= 1 && $bulan <= 12) {
            echo "Bulan ke-$bulan: $namaBulan<br>";
            echo "Jumlah hari: $hari hari";
        } else {
            echo "Nomor bulan tidak valid!";
        }
    }
    ?>
</body>
</html>