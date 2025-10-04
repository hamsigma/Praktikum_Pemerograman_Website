// Fungsi untuk ubah teks & style
function ubahKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");
    
    // ubah textContent
    judul.textContent = "Judul Berubah!";
    paragraf.textContent = "Paragraf ini juga berubah setelah klik tombol.";
    
    // ubah style - mengubah dinamis
    judul.style.color = "green";
    judul.style.fontSize = "2em";
    paragraf.style.color = "blue";
    paragraf.style.backgroundColor = "#efefef";
    paragraf.style.padding = "10px";
    paragraf.style.borderRadius = "5px";
    
    console.log("Konten berhasil diubah!");
}

// Fungsi reset konten ke awal
function resetKonten() {
    const judul = document.getElementById("judul");
    const paragraf = document.getElementById("paragraf");
    
    // reset textContent
    judul.textContent = "Judul Awal";
    paragraf.textContent = "Ini adalah teks awal paragraf.";
    
    // reset style - hapus semua styling dinamis
    judul.style.color = "#1f293f";
    judul.style.fontSize = "28px";
    paragraf.style.color = "black";
    paragraf.style.backgroundColor = "transparent";
    paragraf.style.padding = "0";
    paragraf.style.borderRadius = "0";
    
    console.log("Konten sudah direset!");
}