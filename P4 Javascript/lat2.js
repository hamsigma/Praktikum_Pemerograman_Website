function runLatihan() {
    console.clear(); // bersihkan console setiap jalan

    // Soal 1: CONST
    const mataKuliah = "Pendidikan Matematika Diskrit";
    console.log("MataKuliah:", mataKuliah); // Tampilkan mataKuliah
    
    // Soal 2: LET
    let jumlahMahasiswa = 25;
    jumlahMahasiswa = jumlahMahasiswa + 5;
    console.log("Jumlah Mahasiswa sekarang: ", jumlahMahasiswa);

    // Soal 3: String
    const namaDosen = "Ahmad Saroni";
    console.log("Dosen saya, " + namaDosen);

    // Soal 4: NUMBER
    let angka1 = 50;
    let angka2 = 5;
    console.log("Hasil pertambahan", angka1 + angka2);
    console.log("Hasil pengurangan", angka1 - angka2);
    console.log("Hasil perkalian", angka1 * angka2);
    console.log("Hasil pembagian", angka1 / angka2);
    
    // Soal 5: BOOLEAN
    let lulus = true;
    console.log("Status Lulus :", lulus);
    let sudahUjian = false;
    console.log("Status Ujian:", sudahUjian);
}