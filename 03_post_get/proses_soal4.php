<html>
<head>
    <title>Data Pendaftar (Metode GET)</title>
</head>
<body>
    <h1>Data Pendaftar Mahasiswa Baru</h1>

    <p>Berikut ini adalah data yang telah Anda masukkan:</p>

    <?php
        // DIUBAH: Semua $_POST[] diubah menjadi $_GET[]
        $nama = $_GET['nama'];
        $tempat_lahir = $_GET['tempat_lahir'];
        
        $tgl = $_GET['tgl_lahir'];
        $bln = $_GET['bln_lahir'];
        $thn = $_GET['thn_lahir'];
        $tanggal_lahir = $tgl . " - " . $bln . " - " . $thn;

        $alamat = $_GET['alamat'];
        $jenis_kelamin = $_GET['jenis_kelamin'];
        $asal_sekolah = $_GET['asal_sekolah'];
        $nilai_uan = $_GET['nilai_uan'];

        // Bagian ini tidak perlu diubah
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