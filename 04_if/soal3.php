<html>
<head>
    <title>Hitung Upah Golongan</title>
</head>
<body>
    <h1>Hitung Upah Karyawan</h1>
    
    <form method="post" action="">
        Jam Kerja: <input type="text" name="jam_kerja"><br><br>
        Golongan: 
        <select name="golongan">
            <option value="A">A (Rp.4.000)</option>
            <option value="B">B (Rp.5.000)</option>
            <option value="C">C (Rp.6.000)</option>
            <option value="D">D (Rp.7.500)</option>
        </select><br><br>
        <input type="submit" name="submit" value="Hitung">
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $jamKerja = $_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        
        // Upah per jam berdasarkan golongan
        switch($golongan) {
            case "A": $upahPerJam = 4000; break;
            case "B": $upahPerJam = 5000; break;
            case "C": $upahPerJam = 6000; break;
            case "D": $upahPerJam = 7500; break;
        }
        
        // Hitung total upah
        if ($jamKerja <= 48) {
            $totalUpah = $jamKerja * $upahPerJam;
        } else {
            $jamLembur = $jamKerja - 48;
            $totalUpah = (48 * $upahPerJam) + ($jamLembur * 3000);
        }
        
        echo "<h3>Hasil:</h3>";
        echo "Golongan: $golongan<br>";
        echo "Jam Kerja: $jamKerja jam<br>";
        echo "Total Upah: Rp. " . number_format($totalUpah) . "<br>";
    }
    ?>
</body>
</html>