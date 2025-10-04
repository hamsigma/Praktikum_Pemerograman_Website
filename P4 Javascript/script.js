// 1. Memilih semua elemen yang dibutuhkan dari HTML
const namaInput = document.getElementById("nama");
const nimInput = document.getElementById("nim");
const prodiInput = document.getElementById("prodi");
const matkulInput = document.getElementById("matkul");
const nilaiInput = document.getElementById("nilai");

const submitButton = document.getElementById("submitBtn");
const hasilLaporan = document.getElementById("hasilLaporan");

// 2. Menambahkan event listener 'click' pada tombol submit
submitButton.addEventListener("click", function() {
    
    // 3. Mengambil nilai (value) dari setiap kolom input
    const nama = namaInput.value;
    const nim = nimInput.value;
    const prodi = prodiInput.value;
    const matkul = matkulInput.value;
    const nilai = nilaiInput.value;
    
    // 4. Membuat teks laporan berdasarkan nilai dari input
    const laporanText = `Laporan Studi Mahasiswa: Nama: ${nama}, NIM: ${nim}, Prodi: ${prodi}, Mata Kuliah: ${matkul}, Nilai: ${nilai}`;
    
    // 5. Menampilkan hasil laporan ke dalam elemen paragraf <p>
    hasilLaporan.textContent = laporanText;
});