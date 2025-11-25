<!DOCTYPE html>
<html>
<head>
    <title>Penyelesaian Persamaan Linear 3 Variabel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .result { background: #f0f8ff; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .equation { background: #f9f9f9; padding: 10px; margin: 5px 0; border-left: 3px solid #007bff; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Penyelesaian Sistem Persamaan Linear 3 Variabel</h2>
        
        <div class="equation">
            <strong>Persamaan:</strong> x + y + z = 25
        </div>
        
        <h3>Contoh Penyelesaian yang Diberikan:</h3>
        
        <?php
        // Data contoh yang diberikan dalam soal
        $contoh = [
            [1, 1, 23],
            [1, 2, 22], 
            [1, 3, 21]
        ];
        
        echo "<div class='result'>";
        echo "<h4>Solusi yang diberikan dalam soal:</h4>";
        foreach ($contoh as $i => $sol) {
            $x = $sol[0];
            $y = $sol[1]; 
            $z = $sol[2];
            $total = $x + $y + $z;
            echo "<p>Solusi " . ($i+1) . ": x = $x, y = $y, z = $z → $x + $y + $z = $total</p>";
        }
        echo "</div>";
        
        // Mencari semua kemungkinan solusi dengan nested loop
        echo "<h3>Semua Kemungkinan Solusi (x, y, z adalah bilangan asli):</h3>";
        echo "<div class='result'>";
        
        $solusi = [];
        $count = 0;
        
        // Menggunakan nested FOR/WHILE loop 3 tingkat sesuai petunjuk
        for ($x = 1; $x <= 23; $x++) {
            for ($y = 1; $y <= 24-$x; $y++) {
                $z = 25 - $x - $y;
                if ($z >= 1) {  // z harus bilangan asli (≥ 1)
                    $solusi[] = [$x, $y, $z];
                    $count++;
                }
            }
        }
        
        // Menampilkan beberapa solusi pertama
        echo "<h4>Beberapa solusi pertama:</h4>";
        for ($i = 0; $i < min(10, count($solusi)); $i++) {
            $x = $solusi[$i][0];
            $y = $solusi[$i][1];
            $z = $solusi[$i][2];
            echo "<p>x = $x, y = $y, z = $z</p>";
        }
        
        if (count($solusi) > 10) {
            echo "<p><em>... dan " . (count($solusi) - 10) . " solusi lainnya</em></p>";
        }
        
        echo "<h4>Statistik:</h4>";
        echo "<p><strong>Total jumlah penyelesaian: $count</strong></p>";
        
        // Mencari nilai minimum dan maksimum
        $min_x = min(array_column($solusi, 0));
        $max_x = max(array_column($solusi, 0));
        $min_y = min(array_column($solusi, 1));
        $max_y = max(array_column($solusi, 1));
        $min_z = min(array_column($solusi, 2));
        $max_z = max(array_column($solusi, 2));
        
        echo "<p>Nilai minimum: x = $min_x, y = $min_y, z = $min_z</p>";
        echo "<p>Nilai maksimum: x = $max_x, y = $max_y, z = $max_z</p>";
        
        echo "</div>";
        
        // Menampilkan kode algoritma yang digunakan
        echo "<h3>Algoritma yang Digunakan (Nested FOR Loop 3 Tingkat):</h3>";
        echo "<div class='result'>";
        echo "<pre>";
        echo "for (x = 1; x <= 23; x++) {
    for (y = 1; y <= 24-x; y++) {
        z = 25 - x - y;
        if (z >= 1) {
            // Solusi ditemukan: (x, y, z)
        }
    }
}";
        echo "</pre>";
        echo "</div>";
        ?>
    </div>
</body>
</html>