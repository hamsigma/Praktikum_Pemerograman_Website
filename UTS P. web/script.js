let dataMahasiswa = [];

document.getElementById("btnKirim").addEventListener("click", function() {
  const nama = document.getElementById("nama").value.trim();
  const nim = document.getElementById("nim").value.trim();
  const semester = document.getElementById("semester").value.trim();
  const prodi = document.getElementById("prodi").value;
  const email = document.getElementById("email").value.trim();

  if (!nama || !nim || !semester || !prodi || !email) {
    alert("Harap isi semua form!");
    return;
  }

  const data = { nama, nim, semester, prodi, email };
  dataMahasiswa.push(data);

  console.log("Data Mahasiswa:", data);
  
  updateTabel();

  document.getElementById("nama").value = "";
  document.getElementById("nim").value = "";
  document.getElementById("semester").value = "";
  document.getElementById("prodi").selectedIndex = 0;
  document.getElementById("email").value = "";
});

function updateTabel() {
  const tbody = document.querySelector("#tabelMahasiswa tbody");
  tbody.innerHTML = "";

  dataMahasiswa.forEach((mhs, index) => {
    const row = document.createElement("tr");

    row.innerHTML = `
      <td>${index + 1}</td>
      <td>${escapeHtml(mhs.nama)}</td>
      <td>
        <strong>Prodi:</strong> ${escapeHtml(mhs.prodi)}<br>
        <strong>Semester:</strong> ${escapeHtml(mhs.semester)}<br>
      </td>
    `;
    tbody.appendChild(row);
  });
}

function escapeHtml(str) {
  if (!str && str !== 0) return "";
  return String(str)
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#039;");
}