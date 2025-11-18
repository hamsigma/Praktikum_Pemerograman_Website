<html>
<head>
    <title>Hasil Cek Tahun Kabisat</title>
</head>
<body>
    <h1>Hasil Cek Tahun Kabisat</h1>
    
    <?php
    
    $tahun = $_POST['tahun'];
    
    // Logika penentuan tahun kabisat
    // Tahun kabisat jika:
    // 1. Habis dibagi 4 DAN tidak habis dibagi 100, ATAU
    // 2. Habis dibagi 400
    
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "<p>Tahun ".$tahun." <b>adalah tahun kabisat</b></p>";
    } else {
        echo "<p>Tahun ".$tahun." <b>bukan tahun kabisat</b></p>";
    }
    
    ?>
    
</body>
</html>