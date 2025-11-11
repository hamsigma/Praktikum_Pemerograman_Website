<html>
<head>
    <title>Input Perhitungan Saldo</title>
</head>
<body>
    <h1>Form Perhitungan Saldo Tabungan</h1>
    
    <form method="post" action="proses_soal1.php">
        <table>
            <tr>
                <td>Saldo Awal (Rp.)</td>
                <td>:</td>
                <td><input type="text" name="saldo_awal" value="1000000"></td>
            </tr>
            <tr>
                <td>Besar Bunga Perbulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga" value="0.25"></td>
            </tr>
            <tr>
                <td>Lama Bulan</td>
                <td>:</td>
                <td><input type="text" name="bulan" value="11"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
    </form>

</body>
</html>