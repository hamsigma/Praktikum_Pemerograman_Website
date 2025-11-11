<html>
<head>
    <title>Menghitung Pecahan Uang Tabungan</title>
</head>
<body>
    <h1>Menghitung Pecahan Uang Tabungan Ibu</h1>
    <?php
    // 1. Mengambil data jumlah uang dari form
    $jumlahUang = $_POST['jumlah_uang'];
    
    echo "<p>Jumlah uang yang dihitung: <b>Rp. ".number_format($jumlahUang)."</b></p>";
    echo "<p>Rincian Pecahan:</p>";

    // Variabel untuk menyimpan jumlah masing-masing pecahan
    $a = 0; // Rp. 100.000
    $b = 0; // Rp. 50.000
    $c = 0; // Rp. 20.000
    $d = 0; // Rp. 5.000
    $e = 0; // Rp. 100
    $f = 0; // Rp. 50
    
    // 2. Logika perhitungan (sama seperti kode Anda)
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
    $sisa = $jumlahUang % 50; // Menghitung sisa akhir
    
    // 3. Menampilkan hasil
    echo "Jumlah Rp. 100.000 : ".$a."<br />";
    echo "Jumlah Rp. 50.000 : ".$b."<br />";
    echo "Jumlah Rp. 20.000 : ".$c."<br />";
    echo "Jumlah Rp. 5.000 : ".$d."<br />";
    echo "Jumlah Rp. 100 : ".$e."<br />";
    echo "Jumlah Rp. 50 : ".$f."<br />";
    echo "Sisa : ".$sisa."<br />";
    ?>
</body>
</html>