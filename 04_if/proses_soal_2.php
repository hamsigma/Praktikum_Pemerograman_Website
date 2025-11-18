<html>
<head>
    <title>Hasil Penghitungan Upah</title>
</head>
<body>
    <h1>Hasil Penghitungan Upah</h1>
    
    <?php
    
    $jamKerja = $_POST['jam_kerja'];
    $upahPerJam = 2000;      // Rp. 2.000 per jam normal
    $upahLembur = 3000;      // Rp. 3.000 per jam lembur
    $batasJamNormal = 48;    // Batas jam normal per minggu
    
    // Cara 1: Menggunakan if-else
    if ($jamKerja <= $batasJamNormal) {
        // Tidak ada lembur
        $upahNormal = $jamKerja * $upahPerJam;
        $upahLemburTotal = 0;
        $totalUpah = $upahNormal;
        
        echo "<p>Jam kerja: ".$jamKerja." jam</p>";
        echo "<p>Upah normal: Rp. ".number_format($upahNormal, 0, ',', '.')."</p>";
        echo "<p>Upah lembur: Rp. 0</p>";
        echo "<p><b>Total upah yang diterima: Rp. ".number_format($totalUpah, 0, ',', '.')."</b></p>";
    } else {
        // Ada lembur
        $jamLembur = $jamKerja - $batasJamNormal;
        $upahNormal = $batasJamNormal * $upahPerJam;
        $upahLemburTotal = $jamLembur * $upahLembur;
        $totalUpah = $upahNormal + $upahLemburTotal;
        
        echo "<p>Jam kerja: ".$jamKerja." jam</p>";
        echo "<p>Jam normal: ".$batasJamNormal." jam</p>";
        echo "<p>Jam lembur: ".$jamLembur." jam</p>";
        echo "<p>Upah normal: Rp. ".number_format($upahNormal, 0, ',', '.')."</p>";
        echo "<p>Upah lembur: Rp. ".number_format($upahLemburTotal, 0, ',', '.')."</p>";
        echo "<p><b>Total upah yang diterima: Rp. ".number_format($totalUpah, 0, ',', '.')."</b></p>";
    }
    
    ?>
    
</body>
</html>