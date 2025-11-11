<html>
<head>
    <title>Menghitung Pecahan Uang Tabungan</title>
</head>
<body>
    <h1>Menghitung Pecahan Uang Tabungan Ibu</h1>
    <?php
    $jumlahUang = 1575250;
    
    // Variabel untuk menyimpan jumlah masing-masing pecahan
    $a = 0; // Rp. 100.000
    $b = 0; // Rp. 50.000
    $c = 0; // Rp. 20.000
    $d = 0; // Rp. 5.000
    $e = 0; // Rp. 100
    $f = 0; // Rp. 50
    
    // Hitung pecahan Rp. 100.000
    $a = intval($jumlahUang / 100000);
    $jumlahUang = $jumlahUang % 100000;
    
    // Hitung pecahan Rp. 50.000
    $b = intval($jumlahUang / 50000);
    $jumlahUang = $jumlahUang % 50000;
    
    // Hitung pecahan Rp. 20.000
    $c = intval($jumlahUang / 20000);
    $jumlahUang = $jumlahUang % 20000;
    
    // Hitung pecahan Rp. 5.000
    $d = intval($jumlahUang / 5000);
    $jumlahUang = $jumlahUang % 5000;
    
    // Hitung pecahan Rp. 100
    $e = intval($jumlahUang / 100);
    $jumlahUang = $jumlahUang % 100;
    
    // Hitung pecahan Rp. 50
    $f = intval($jumlahUang / 50);
    
    echo "Jumlah Rp. 100.000 : ".$a."<br />";
    echo "Jumlah Rp. 50.000 : ".$b."<br />";
    echo "Jumlah Rp. 20.000 : ".$c."<br />";
    echo "Jumlah Rp. 5.000 : ".$d."<br />";
    echo "Jumlah Rp. 100 : ".$e."<br />";
    echo "Jumlah Rp. 50 : ".$f."<br />";
    ?>
</body>
</html>

<!-- Penjelasan Perhitungan:
Algoritma Greedy (Pecahan Terbesar Terlebih Dahulu):
1. Pecahan Rp. 100.000:

1.575.250 ÷ 100.000 = 15 lembar
Sisa: 1.575.250 - (15 × 100.000) = 75.250
2. Pecahan Rp. 50.000:

75.250 ÷ 50.000 = 1 lembar
Sisa: 75.250 - (1 × 50.000) = 25.250
3. Pecahan Rp. 20.000:

25.250 ÷ 20.000 = 1 lembar
Sisa: 25.250 - (1 × 20.000) = 5.250
4. Pecahan Rp. 5.000:

5.250 ÷ 5.000 = 1 lembar
Sisa: 5.250 - (1 × 5.000) = 250
5. P