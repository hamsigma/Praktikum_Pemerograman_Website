<html>
<head>
    <title>Data Pendaftar</title>
</head>
<body>
    <h1>Data Pendaftar Mahasiswa Baru</h1>

    <p>Berikut ini adalah data yang telah Anda masukkan:</p>

    <?php
        // Menangkap data dari form
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        
        // Menggabungkan tanggal lahir
        $tgl = $_POST['tgl_lahir'];
        $bln = $_POST['bln_lahir'];
        $thn = $_POST['thn_lahir'];
        $tanggal_lahir = $tgl . " - " . $bln . " - " . $thn;

        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $nilai_uan = $_POST['nilai_uan'];

        // Menampilkan data dalam tabel
        echo "<table>";
        echo "<tr><td>Nama Lengkap</td><td>:</td><td>".$nama."</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>:</td><td>".$tempat_lahir."</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>:</td><td>".$tanggal_lahir."</td></tr>";
        echo "<tr><td>Alamat Rumah</td><td>:</td><td>".$alamat."</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>:</td><td>".$jenis_kelamin."</td></tr>";
        echo "<tr><td>Asal Sekolah</td><td>:</td><td>".$asal_sekolah."</td></tr>";
        echo "<tr><td>Nilai UAN</td><td>:</td><td>".$nilai_uan."</td></tr>";
        echo "</table>";
    ?>
</body>
</html>