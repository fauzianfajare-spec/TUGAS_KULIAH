let dataMahasiswa = [];

function tambahData() {
  const nama = document.getElementById("nama").value.trim();
  const nim = document.getElementById("nim").value.trim();
  const prodi = document.getElementById("prodi").value.trim();  
  const semester = document.getElementById("semester").value.trim();

  if (!nama || !nim || !semester || !prodi || !email) {
    alert("Harap isi semua data dengan benar!");
    return;
  }
  const mahasiswa = { nama, nim, semester, prodi, email };
  dataMahasiswa.push(mahasiswa);

  console.log("Data Mahasiswa Baru:", mahasiswa);
  console.log("Jumlah Data:", dataMahasiswa.length);

  tampilkanData();

  // Kosongkan form setelah submit
  document.getElementById("nama").value = "";
  document.getElementById("nim").value = "";
  document.getElementById("semester").value = "";
  document.getElementById("prodi").value = "";
  document.getElementById("email").value = "";
}

function tampilkanData() {
  const tbody = document.querySelector("#tabelMahasiswa tbody");
  tbody.innerHTML = "";

  dataMahasiswa.forEach((mhs, index) => {
    const row = `
      <tr>
        <td>${index + 1}</td>
        <td>${mhs.nama}</td>
        <td>${mhs.prodi}, Semester: ${mhs.semester}</td>
      </tr>
    `;
    tbody.innerHTML += row;
  });
}
